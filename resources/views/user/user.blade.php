@extends('layouts.app')
@section('content')
    @php
    echo auth()->user()->id;
    @endphp
    @endsection
