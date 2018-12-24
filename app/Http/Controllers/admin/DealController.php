<?php

namespace App\Http\Controllers\admin;

use App\Bets;
use App\Category;
use App\Deals;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addDeal(Request $request)
    {
        if ($request->isMethod('post')) {

            $deal = new Deals();
            $deal->category_id = $request->post('category_id');
            $deal->product_id = $request->post('product_id');;
            $deal->creator_id = auth()->user()->id;
            if ($deal->save()) ;
            return redirect('dashboard');
            return view('admin/dashboard', $data);

        } else {
            $categories = Category::all();

            $products = Product::where('category_id', 1)->cursor();

            $data = [
                'categories' => $categories,
                'products' => $products,
                'success' => false,
            ];
//            var_dump($data['products']);
//            exit();
            return view('admin/addDeal', $data);
        }

    }

    public function validateAddProduct(Request $request)
    {
        $validatedData = $request->validate([

            'category_id' => 'required',
            'product_id' => 'required',
        ]);
        return $validatedData;
    }

    public function show(Request $request)
    {

        $id = $request->route('id');

        $bet = new Bets();
        $bets = $bet->last($id);

        $deal = new Deals();
        $deal = $deal->getProduct($id);
        $data = [
            'deal' => $deal[0],
            'bets' => $bets,
        ];

        return view('deal', $data);
    }
}
