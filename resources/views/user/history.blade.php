@extends('layouts.app')
@section('content')
    <div id="chartdiv"></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">Product name</th>
            <th scope="col">Points</th>
            <th scope="col">Date</th>

        </tr>
        </thead>
        <tbody>
        @php($i=1)
        @foreach($history as $bet)

            {{--@php(extract($bet))--}}
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$bet->deal_id}}</td>
                <td>{{$bet->points}}</td>
                <td>{{$bet->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
