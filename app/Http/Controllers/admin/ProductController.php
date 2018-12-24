<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validateAddProduct($request);
            $product = new Product();
            $product->category_id = $request->post('category_id');
            $product->name = $request->post('name');
            $product->points = intval(str_replace(' ','',$request->post('price'))*1.20);
            $product->product_url = $request->post('product_url');
            $product->shop_url = $request->post('shop_url');
//            $product->about = str_replace(',','..',$request->post('about'));
            $product->about = $request->post('about');
            $product->realeased_count = 0;
            $product->creator_id = Auth::user()->getAuthIdentifier();
//            var_dump($product);
//            exit();
            $product->save();
            $data['success'] = true;
            return redirect('/add-product');

        }
        $categories = Category::all();
        $data = [
            'categories' => $categories,
            'success' => false,
        ];
        return view('admin.addProduct', $data);
    }


    public function getProducts(Request $request){
        $category_id = $request->route('category_id');
        $products = Product::where('category_id',$category_id)->get();

        return response()->json($products);
    }

    public function validateAddProduct(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required',
            'about' => 'required',
        ]);
        return $validatedData;
    }
}
