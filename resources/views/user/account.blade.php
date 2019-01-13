@extends('layouts.app')
@section('content')
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-4"><!--left col-->


                <div class="text-center">
                    <img src="/images/user.png" class="avatar img-circle img-thumbnail"
                         alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>


                <ul class="list-group mb-4">
                    <li class="list-group-item text-muted"><i class="fas fa-chart-line"></i> Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="float-left chart" id="points"><a href="#" class="text-dark"><i class="fas fa-history"></i></a></span><span class="pull-left"><strong>Spend points</strong></span> {{$stat->getSpendPoints()}}</li>
                    <li class="list-group-item text-right"><span class="float-left chart" id="avgPoints"><i class="fas fa-history"></i></span><span class="pull-left"><strong>Avg bet</strong></span> {{$stat->getAvgBet()}}</li>
                    <li class="list-group-item text-right"><span class="float-left chart" id="avgChance"><i class="fas fa-history"></i></span><span class="pull-left"><strong>Avg chance</strong></span> {{substr($stat->getAvgChance(),0,6)}}</li>
                    <li class="list-group-item text-right"><span class="float-left chart" id="bets"><a href="#" class="text-dark"><i class="fas fa-history"></i></a></span><span class="pull-left"><strong>Bets</strong></span> {{$stat->getRealasedBets()}}</li>
                    @if($stat->getWins())
                    <li class="list-group-item text-right"><span class="float-left" id="wins"><i class="fas fa-history"></i></span><span class="pull-left"><strong>Wins</strong></span> {{$stat->getWins()}}</li>
                    @endif
                </ul>

                <ul class="list-group mb-4">
                    <li class="list-group-item text-muted"><i class="fas fa-money-bill"></i> Points <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="float-left"><i class="fas fa-history"></i></span><span class="pull-left"><strong>Frozen</strong></span> {{$stat->getFrozenPoints()}}</li>
                    <li class="list-group-item text-right"><span class="float-left" id="addPoints"><i class="fas fa-plus"></i></span><span class="pull-left"><strong>Avalible</strong></span> {{$user->points}}</li>
                </ul>

            </div><!--/col-3-->
            <div class="col-sm-8">
                <form class="form" action="/update-user" method="post" id="userForm">
                    @csrf
                    <fieldset class="border p-3 mb-4">
                        <legend class="w-auto"> <i class="fas fa-user-tie"></i> Personal data</legend>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="name"><h4>First name</h4></label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="first name" value="{{$user->name}}" title="enter your first name if any.">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="surname"><h4>Last name</h4></label>
                            <input type="text" class="form-control" name="surname" id="surname"
                                   placeholder="last name" value="{{$user->surname}}" title="enter your last name if any.">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email"><h4>Email</h4></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com"
                                   value="{{$user->email}}" title="enter your email.">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="phone_number"><h4>Phone</h4></label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="enter phone"
                                   value="{{$user->phone_number}}" title="enter your phone number if any.">
                        </div>
                    </div>
                    </fieldset>
                    <fieldset class="border p-3 mb-4">
                        <legend class="w-auto"><i class="fas fa-map-marker-alt"></i> Localization</legend>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="city"><h4>City</h4></label>
                            <input type="text" class="form-control" name="city" id="city"
                                   value="{{$user->city}}" placeholder="enter city name" title="enter your city name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="street"><h4>Street</h4></label>
                            <input type="text" class="form-control" name="street" id="street"
                                   value="{{$user->street}}" placeholder="enter street and number of house" title="enter your street and number of house">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="post_code"><h4>Post code</h4></label>
                            <input type="text" class="form-control" name="post_code" id="post_code"
                                   value="{{$user->post_code}}" placeholder="enter post code" title="enter your post code">
                        </div>
                    </div>
                    </fieldset>
                    <fieldset class="border p-3 mb-4">
                        <legend class="w-auto"><i class="fas fa-key"></i> Reset password</legend>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="password"><h4>New</h4></label>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="password" title="enter your password.">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="password2"><h4>Confirm</h4></label>
                            <input type="password" class="form-control" name="password2" id="password2"
                                   placeholder="password2" title="enter your password2.">
                        </div>
                    </div>
                    </fieldset>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-success float-left" type="submit">
                                <i class="far fa-save"></i> Save
                            </button>
                            <button class="btn btn-lg float-right" type="reset"><i class="fas fa-redo"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('.chart').click(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var category =$(this).attr('id');
            console.log(category);
            $.ajax({
                    url: '/analytics' ,
                    dataType: 'json',
                    type: 'post',
                    data:{_token: CSRF_TOKEN,"category":category},
                    success: function (data) {
                        Swal({
                            title: '<strong>Spend points</u></strong>',
                            html:
                                '<div id="chartdiv"></div>',
                            width: 800,
                            showCloseButton: true,
                            showCancelButton: false,
                            showConfirmButton: false,
                            focusConfirm: false,
                        })
                        // Themes begin
                        am4core.useTheme(am4themes_animated);
                        // Themes end

                        var chart = am4core.create("chartdiv", am4charts.PieChart3D);
                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                        chart.legend = new am4charts.Legend();
                        chart.data = data;
                        chart.innerRadius = 75;

                        var series = chart.series.push(new am4charts.PieSeries3D());
                        series.dataFields.value = "points";
                        series.dataFields.category = "category";
                    }
                }
            )

        })
    </script>

@endsection
