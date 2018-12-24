@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 pb-3">
                <div class="card">
                    <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap"
                         src="{{ asset('images/deal.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$deal->name}}</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                 style="width: {{intval(floatval($deal->current_point)*100/floatval($deal->points))}}%;"
                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="py-1">
                            <a class="btn btn-info w-100" href="{{$deal->product_url}}" target="_blank"> Official site</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-9 pb-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <p class="h5">{{$deal->about}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center w-100">
                @foreach($bets as $bet)
                    <div class="col-md-1 col-sm-2 col-auto px-1">
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap"
                                 src="{{ asset('images/user.png') }}" alt="Card image cap">
                            <div class="card-body px-1 py-1 text-center">
                                <p class="card-title mb-0">{{$bet->points}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection