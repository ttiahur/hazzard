@extends('layouts.app')
@section('content')

    {{--<a href="/add-category" class="button-primary">Add category</a>--}}
    <div class="container">
        <div class="row align-content-md-center">
            <div class="col-md-4 ">
                <div class="h1">Dashboard</div>
            </div>
        </div>

        <div class="row d-flex flex-column">
            <div class="col-md-4">
                <a href="/list-category" class="button-primary">List category</a>
            </div>

            <div class="col-md-4 ">
                <a href="/list-product" class="button-primary">List product</a>
            </div>

            <div class="col-md-4">
                <a href="/add-product" class="button-primary">Add product</a>

            </div>

            <div class="col-md-4">
                <a href="/add-deal" class="button-primary">Add deal</a>
            </div>
        </div>
    </div>

    </div>


@endsection()
