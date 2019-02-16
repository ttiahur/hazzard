@extends('layouts.app')
@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/list-deal">Deal list</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add deal</li>
            </ol>
        </nav>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif(isset($success)&&$success)
            <div class="alert alert-success">
                <ul>
                    <li>Success</li>
                </ul>
            </div>
        @endif
        <div class="form-row">
            <form method="post" action="/add-deal" class="col-md-8">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control target" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product">Product</label>
                    <select class="form-control" name="product_id" id="product">
                        @foreach($products as $product)
                            @php(var_dump($product))
                            <option value="{{$product['product_id']}}">{{$product['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#category').change(function () {
                console.log(1);
                id = $('#category').val();
                $.ajax({
                    url: "http://hazzard/get-products/" + id,
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        $('#product').find('option')
                            .remove()
                            .end();
                        /// Add options
                        for (let i in data) {
                            $('#product').append('<option value=' + data[i].product_id + '>' + data[i].name + '</option>');
                        }

                        // Set selected value
                        // $(select).val(data[1]);
                    }
                });
            });
        })


    </script>
@endsection
