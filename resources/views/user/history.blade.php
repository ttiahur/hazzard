@extends('layouts.app')
@section('content')
    <div class="container bootstrap snippet">
        <div class="row pb-4">
            <div id="chartdiv"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="table-responsive">
                    <table class="table sortable">
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
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var category = 'bets';
            console.log(category);
            $.ajax({
                    url: '/analytics',
                    dataType: 'json',
                    type: 'post',
                    data: {_token: CSRF_TOKEN, "category": category},
                    success: function (data) {
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
