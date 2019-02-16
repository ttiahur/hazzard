@extends('layouts.app')
@section('content')
    <div class="container">
        <fieldset class="border p-3 mb-4">
            <legend class="w-auto"><i class="fas fa-map-marker-alt"></i> Product</legend>
            <div class="row">
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Name</legend>
                        <pre class="text-center"> {{$product->name}}</pre>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Shop</legend>
                        <pre class="text-center"> {{$product->shop_url}}</pre>
                    </fieldset>
                </div>
            </div>
        </fieldset>
        <fieldset class="border p-3 mb-4">
            <legend class="w-auto"><i class="fas fa-map-marker-alt"></i> Delivery</legend>
            <div class="row">
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">City</legend>
                        <pre class="text-center"> {{$delivery->city}}</pre>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Street</legend>
                        <pre class="text-center"> {{$delivery->street}}</pre>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Post code</legend>
                        <pre class="text-center"> {{$delivery->post_code}}</pre>
                    </fieldset>
                </div>
            </div>
        </fieldset>
        <fieldset class="border p-3 mb-4">
            <legend class="w-auto"><i class="fas fa-map-marker-alt"></i> User</legend>
            <div class="row">
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Name</legend>
                        <pre class="text-center"> {{$user->name}}</pre>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Surname</legend>
                        <pre class="text-center"> {{$user->surname}}</pre>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Emial</legend>
                        <pre class="text-center"> {{$user->email}}</pre>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset class="border">
                        <legend class="w-auto px-1 ml-4">Phone</legend>
                        <pre class="text-center"> {{$user->phone_number}}</pre>
                    </fieldset>
                </div>
            </div>
        </fieldset>
        <a class="btn btn-success" href="/confirm-buy/{{$deal->id}}">Confirm buy</a>
    </div>

    <script>
        function copyFunction() {
            const copyText = document.getElementById("myInput").textContent;
            const textArea = document.createElement('textarea');
            textArea.textContent = copyText;
            document.body.append(textArea);
            textArea.select();
            document.execCommand("copy");
        }

        document.getElementById('button').addEventListener('click', copyFunction);
    </script>
@endsection
