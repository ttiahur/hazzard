@extends('layouts.app')
@section('content')

    <a href="/add-category" class="">Add category</a>
    <table class="table">
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
            <td><a href="/edit-category/{{$id}}" class="">Edit</a></td>
            <td><a href="/delete-category/{{$id}}" class="">Delete</a></td>

        </tr>
    @endforeach
        </tbody>
    </table>

    @endsection