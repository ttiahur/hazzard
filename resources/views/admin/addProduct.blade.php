@extends('layouts.app')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif(isset($success)&&$success)
            <div class="alert alert-success">
                <ul>
                        <li>Success</li>
                </ul>
            </div>
        @endif
        @if($success)
            <div class="row">
                <div class="h1">Success</div>
            </div>
        @endif
        <div class="form-row">

            <form method="post" action="/add-product" class="col-md-8">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea type="text" name="about" class="form-control" id="about" placeholder="Enter about"></textarea>
                </div>
                <div class="form-group">
                    <label for="product_url">Official site</label>
                    <input type="text" name="product_url" class="form-control" id="product_url"
                           placeholder="Enter url from official site">
                </div>
                <div class="form-group">
                    <label for="shop_url">Shop</label>
                    <input type="text" name="shop_url" class="form-control" id="shop_url"
                           placeholder="Enter url from shop">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection