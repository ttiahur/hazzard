@extends('layouts.app')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product list</li>
                <li class="breadcrumb-item"><a href="/add-product">Add product</a></li>
            </ol>
        </nav>
        <div id="accordion" role="tablist">
            @foreach($categories as $category => $products)
                @if(count($products)>0)
                    <div class="card">
                        <div class="card-header" role="tab" id="heading_{{$category}}">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse_{{$category}}" aria-expanded="true"
                                   aria-controls="collapseOne">
                                    {{$category}}
                                    <span class="float-right">{{count($products)}}</span>
                                </a>
                            </h5>
                        </div>

                        <div id="collapse_{{$category}}" class="collapse " role="tabpanel"
                             aria-labelledby="heading_{{$category}}" data-parent="#accordion">
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
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td><a href="/edit-product/{{$product->product_id}}" class=""><i
                                                        class="far fa-edit"></i> Edit</a></td>
                                            <td><a class="text-danger" href="/delete-product/{{$product->product_id}}" class=""><i
                                                        class="far fa-trash-alt"></i> Delete</a></td>
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
