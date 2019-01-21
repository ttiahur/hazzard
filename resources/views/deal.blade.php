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
                        <div class="col-md-12 col-sm-12 py-1 px-0 mx-0">
                            <button class="btn btn-success w-100 bet " bet_id="{{$deal->id}}" type="button">
                                Bet
                            </button>
                        <!--onclick="window.location='{{ url("bet/$deal->id") }}'"-->
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
    <script type="text/javascript">
        $('.bet').click(function () {
            var id = $(this).attr('bet_id');
            $.ajax({
                url: /add-bet/ + id,
                dataType: 'json',
                type: 'get',
                success: function (data) {
                    console.log(data.product.points);

                    Swal({
                        title: '<strong>Take a bet</strong>',
                        html:
                            '<div class="card">'
                            + '<meta name="csrf-token" content="{{ csrf_token() }}" />'
                            + '<img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" src="/images/deal.jpg" alt="Card image cap">'
                            + '<div class="card-body">'
                            + '<h4 class="card-title deal-id" >{{$deal->name}}</h4>'
                            + '<div class="row pt-3">'
                            + '<div class="slidecontainer col-md-12 py-2">'
                            + '<p>Take bet value:</p>'
                            + '<input type="range" price="' + data.product.points + '" min="1" max="' + data.maxPoints + '" value="1" class="slider" id="myRange">'
                            + '</div>'
                            + '<div class="col-md-6 col-sm-12 py-2">'
                            + '<p class="bet-points w-100">You bet:</p>'
                            + '</div>'
                            + '<div class="col-md-6 col-sm-12 py-2">'
                            + '<p class="chance w-100">You chance:</p>'
                            + '</div>'
                            + '<div class="col-md-12 col-sm-12 py-1">'
                            + '<button class="btn btn-success w-100 set-bet" id_deal="' + id + '" type="button"> Bet</button>'
                            + '</div>'
                            + '</div>'
                            + '</div>'
                            + '</div>',
                        showCloseButton: true,
                        showConfirmButton: false,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText:
                            '<i class="fa fa-thumbs-up"></i> Great!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                        cancelButtonText:
                            '<i class="fa fa-thumbs-down"></i>',
                        cancelButtonAriaLabel: 'Thumbs down',
                    })
                },
            });
        });
        $(function () {

        });
        $(document).on("change", ".slider", function () {
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            var price = $('.slider').attr('price');
            var chance = slider.value / price * 100;
            $('.chance').text('You chance: ' + chance.toString().substring(0, 5));
            $('.bet-points').text('You bet: ' + slider.value);
            console.log();
            console.log(slider.value);

        });
        $(document).on("click", ".set-bet", function () {
            var id = $('.set-bet').attr('id_deal');
            var points = document.getElementById("myRange").value;
            var dealName = $('.deal-id').text();
            console.log(dealName);
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                    url: '/confirm-bet/' + id,
                    dataType: 'json',
                    type: 'post',
                    data: {_token: CSRF_TOKEN, "id": id, "points": points},
                    success: function (data) {
                        swal.close();
                        if (data.success){
                            Swal(
                                'Bet confirmed!',
                                'You bet ' + points + ' to offer ' + dealName,
                                'success'
                            )
                        } else {
                            Swal(
                                'Bet not confirmed!',
                                'You bet to offer ' + dealName + ' error',
                                'error'

                            )
                        }

                    }
                }
            )
        })

    </script>
@endsection
