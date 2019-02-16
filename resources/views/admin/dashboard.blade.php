@extends('layouts.app')
@section('content')

    {{--<a href="/add-category" class="button-primary">Add category</a>--}}
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item active"aria-current="page"><a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/add-category">Add category</a>
                        <a class="dropdown-item" href="/add-deal">Add deal</a>
                        <a class="dropdown-item" href="/add-product">Add product</a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="row align-content-md-center">
            <div class="col-md-4 ">
                <div class="h1">Dashboard</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <a href="/list-category" class="btn btn-info w-100">List category</a>
            </div>

            <div class="col-md-3 ">
                <a href="/list-product" class="btn btn-info w-100">List product</a>
            </div>

            <div class="col-md-3">
                <a href="/add-product" class="btn btn-info w-100">Add product</a>

            </div>

            <div class="col-md-3">
                <a href="/add-deal" class="btn btn-info w-100">Add deal</a>
            </div>
        </div>
    </div>

    </div>


@endsection()
