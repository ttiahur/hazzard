<?php

namespace App\Http\Controllers\admin;

use App\Bets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use PHPUnit\Util\Json;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $category = new Category();
            $category->name = $request->input('name');
            $category->save();
            return redirect('list-category');
//            $data = [
//                'success' => true,
//            ];
        } else {
            $data['success'] = false;
        }
        return view('admin.addCategory', $data);
    }

    public function get(Request $request)
    {
        $categoryList = Category::all();
        return response()->json($categoryList);
    }


    public function list(Request $request)
    {
        $categories = Category::all()->toArray();

        $data = [
            'categories' => $categories
        ];


        return view('admin.listCategory', $data);
    }

    public function edit (Request $request){

    }

    public function delete (Request $request){
        $id = $request->route('id');
        Category::destroy($id);
        return redirect('/list-category');
    }
}
