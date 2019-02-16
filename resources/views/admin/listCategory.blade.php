@extends('layouts.app')
@section('content')
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category list</li>
            <li class="breadcrumb-item"><a href="/add-category">Add category</a></li>
        </ol>
    </nav>
    <table class="table sortable">
        <thead>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">Name</th>
            <th scope="col">Controls</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        @php($i=1)
    @foreach($categories as $key => $category)
        @php(extract($category))
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$name}}</td>
            <td><a href="/edit-category/{{$id}}" class=""><i class="far fa-edit"></i>Edit</a></td>
            <td><a href="/delete-category/{{$id}}" class=""><i class="far fa-trash-alt"></i>Delete</a></td>
        </tr>
    @endforeach
        </tbody>
    </table>
    </div>
    @endsection
