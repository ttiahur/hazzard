@extends('layouts.app');
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
                            <div class="row pt-3">
                                <div class="col-md-12 py-1">
                                    <button class="btn btn-danger w-100" type="button" onclick="window.location='{{ url("deal/$deal->id") }}'"> More</button>
                                </div>
                                <div class="col-md-12 col-sm-12 py-1">
                                    <button class="btn btn-success w-100 bet" bet_id="{{$deal->id}}" type="button" > Bet</button>
                                    <!--onclick="window.location='{{ url("bet/$deal->id") }}'"-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<script type="text/javascript">
   $('.bet').click(function(){
     var id = $(this).attr('bet_id');
     $.ajax({
    url: /add-bet/+id,
    dataType: 'json',
    type: 'get',
    success: function (data) {
        console.log(data.product.points);
       
           Swal({
  title: '<strong>Take a bet</strong>',
  html:
                        '<div class="card">'
                        +'<img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" src="/images/deal.jpg" alt="Card image cap">'
                        +'<div class="card-body">'
                            +'<h4 class="card-title">{{$deal->name}}</h4>'                        
                            +'<div class="row pt-3">'
                                +'<div class="slidecontainer col-md-12 py-2">'  
                                    +'<p>Take bet value:</p>'
                                        +'<input type="range" price="'+data.product.points+'" min="0" max="'+data.maxPoints+'" value="0" class="slider" id="myRange">'
                                +'</div>'
                                +'<div class="col-md-6 col-sm-12 py-2">'
                                    +'<p class="bet-points w-100">You bet:</p>'
                                +'</div>'
                                +'<div class="col-md-6 col-sm-12 py-2">'
                                    +'<p class="chance w-100">You chance:</p>'
                                +'</div>'
                                +'<div class="col-md-12 col-sm-12 py-1">'
                                    +'<button class="btn btn-success w-100 dupa" type="button" onclick="window.location=\'{{ url("bet/$deal->id") }}\'"> Bet</button>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>',
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
    $(function() {

});
 $(document).on ("change", ".slider", function () {
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        var price = $('.slider').attr('price');
        var chance = slider.value/price*100;
        $('.chance').text('You chance: ' + chance.toString().substring(0, 5));
        $('.bet-points').text('You bet: ' + slider.value);
console.log();
console.log(slider.value);

    });
    </script>
@endsection