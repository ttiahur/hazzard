@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($deals as $deal)
        <div class="col-md-3 pb-3">
            <div class="card">
                <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" src="{{ asset('images/deal.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{$deal->name}}</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{intval(floatval($deal->current_point)*100/floatval($deal->points))}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="py-1">
                        <button class="btn btn-danger w-100" type="button" onclick="window.location='{{ url("deal/$deal->id") }}'"> More...</button>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>
@endsection
