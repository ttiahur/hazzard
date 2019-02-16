<?php

namespace App\Http\Controllers\admin;

use App\Bets;
use App\Category;
use App\Deals;
use App\Delivery;
use App\Http\Managers\ProductBuyManager;
use App\Http\Managers\ProductListManager;
use App\Product;
use App\User;
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
            $product->points = intval(str_replace(' ', '', $request->post('price')) * 1.20);
            $product->product_url = $request->post('product_url');
            $product->shop_url = $request->post('shop_url');
            $product->about = $request->post('about');
            $product->realeased_count = 0;
            $product->creator_id = Auth::user()->getAuthIdentifier();
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

    public function editProduct(Request $request)
    {
        $id = $request->route('id');
        $product = Product::where('product_id', $id)->first();

        if ($request->isMethod('post')) {
            $this->validateAddProduct($request);
            $product = Product::where('product_id', $id)->first();
            $product->category_id = $request->post('category_id');
            $product->name = $request->post('name');
            $product->points = intval(str_replace(' ', '', $request->post('price')) * 1.20);
            $product->product_url = $request->post('product_url');
            $product->shop_url = $request->post('shop_url');
            $product->about = $request->post('about');
            $product->realeased_count = 0;
            $product->creator_id = Auth::user()->getAuthIdentifier();
            $product->save();
            $data['success'] = true;

            return redirect('/edit-product/' . $id);
        }
        $categories = Category::all();
        $data = [
            'product' => $product,
            'categories' => $categories,
        ];

        return view('admin.editProduct', $data);
    }


    public function getProducts(Request $request)
    {
        $category_id = $request->route('category_id');
        $products = Product::where('category_id', $category_id)->get();

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

    public function listProduct(Request $request)
    {

        $productByCategory = new ProductListManager();

        $data = [
            'categories' => $productByCategory->getProductListByCategory()
        ];


        return view('admin.listProduct', $data);
    }

    public function buyProduct(Request $request)
    {
        $deal_id = $request->route('id');
        $buy = new ProductBuyManager($deal_id);

        $data = [
            'deal' => $buy->getDeal(),
            'user' => $buy->getUser(),
            'product' => $buy->getProduct(),
            'delivery' => $buy->getDelivery()
        ];

        return view('admin.buyProduct', $data);
    }
}
