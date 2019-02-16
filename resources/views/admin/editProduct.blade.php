@extends('layouts.app')
@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/list-product">Product list</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit product</li>
            </ol>
        </nav>
        {{--@if ($errors->any())--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@elseif(isset($success)&&$success)--}}
            {{--<div class="alert alert-success">--}}
                {{--<ul>--}}
                    {{--<li>Success</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if($success)--}}
            {{--<div class="row">--}}
                {{--<div class="h1">Success</div>--}}
            {{--</div>--}}
        {{--@endif--}}
        <div class="form-row">
            <form method="post" action="/edit-product/{{$product->product_id}}" class="col-md-8">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category['id']}}" {{$category['id'] == $product->category_id?" selected=\"selected\"":''}}>{{$category['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea type="text" name="about" class="form-control" id="about"
                              placeholder="Enter about">{{$product->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="product_url">Official site</label>
                    <input type="text" name="product_url" class="form-control" id="product_url"
                           placeholder="Enter url from official site" value="{{$product->product_url}}">

                </div>
                <div class="form-group">
                    <label for="shop_url">Shop</label>
                    <input type="text" name="shop_url" class="form-control" id="shop_url"
                           placeholder="Enter url from shop" value="{{$product->shop_url}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price" value="{{$product->points*80/96}}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
