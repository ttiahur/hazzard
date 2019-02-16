@extends('layouts.app')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Deal list</li>
                <li class="breadcrumb-item"><a href="/add-deal">Add deal</a></li>
            </ol>
        </nav>
        <div id="accordion" role="tablist">
            @foreach($deals as $deal)
                @if(count($deal['deals'])>0)
                    <div class="card">
                        <div class="card-header" role="tab" id="heading_{{$deal['param']}}">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse_{{$deal['param']}}" aria-expanded="true"
                                   aria-controls="collapseOne">
                                    {{$deal['label']}}
                                    <span class="float-right">{{count($deal['deals'])}}</span>
                                </a>
                            </h5>
                        </div>

                        <div id="collapse_{{$deal['param']}}" class="collapse " role="tabpanel"
                             aria-labelledby="heading_{{$deal['param']}}" data-parent="#accordion">
                            <div class="card-body py-0">
                                <table class="table sortable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Controls</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deal['deals'] as $dealObject)
                                        <tr>
                                            <td>{{$dealObject->product_name}}</td>
                                            @foreach($dealObject->controls as $control)
                                            <td><a href="{{$control['action']}}" class=""><i class="{{$control['icon']}}"></i>  {{$control['label']}}</a></td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <script>
        (function () {
            'use strict'

            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.head.appendChild(msViewportStyle)
            }

        }())
    </script>
@endsection
