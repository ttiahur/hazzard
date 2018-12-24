@extends('layouts.app')
@section('content')
    <div class="container">
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