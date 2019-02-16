@extends('layouts.app')
@section('content')

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/list-category">Category list</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add category</li>
            </ol>
        </nav>

        @if($success)
            <div class="row">
                <div class="h1">Success</div>
            </div>
        @endif
        <div class="row">

            <form method="post" action="/add-category">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
