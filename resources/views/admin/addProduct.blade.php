@extends('layouts.app')
@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/list-product">Product list</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add product</li>
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
        @if($success)
            <div class="row">
                <div class="h1">Success</div>
            </div>
        @endif
        <div class="form-row">

            <form method="post" action="/add-product" class="col-md-8">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea type="text" name="about" class="form-control" id="about"
                              placeholder="Enter about"></textarea>
                </div>
                <div class="form-group">
                    <label for="product_url">Official site</label>
                    <input type="text" name="product_url" class="form-control" id="product_url"
                           placeholder="Enter url from official site">
                </div>
                <div class="form-group">
                    <label for="shop_url">Shop</label>
                    <input type="text" name="shop_url" class="form-control" id="shop_url"
                           placeholder="Enter url from shop">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="photos">Photos</label>--}}
                    {{--<input type="file" name="img" multiple class="form-control d-none" id="photos">--}}
                    {{--<div class="row" id="preview"></div>--}}
                {{--</div>--}}
                {{--<div id="status">Drag the files from a folder to a selected area ...</div>--}}
                {{--<div id="drop">Drop files here.</div>--}}
                {{--<div id="list"></div>--}}
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>

    </div>
    <style>
        #drop {
            min-height: 150px;
            width: 250px;
            border: 1px solid blue;
            margin: 10px;
            padding: 10px;
        }
    </style>
    <script>
        if (window.FileReader) {
            var drop;
            addEventHandler(window, 'load', function() {
                var status = document.getElementById('status');
                drop = document.getElementById('drop');
                var list = document.getElementById('preview');

                function cancel(e) {
                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                    return false;
                }

                // Tells the browser that we *can* drop on this target
                addEventHandler(drop, 'dragover', cancel);
                addEventHandler(drop, 'dragenter', cancel);

                addEventHandler(drop, 'drop', function(e) {
                    e = e || window.event; // get window.event if e argument missing (in IE)
                    if (e.preventDefault) {
                        e.preventDefault();
                    } // stops the browser from redirecting off to the image.

                    var dt = e.dataTransfer;
                    var files = dt.files;
                    var input = document.getElementById('photos');
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        var reader = new FileReader();

                        //attach event handlers here...

                        reader.readAsDataURL(file);

                        addEventHandler(reader, 'loadend', function(e, file) {
                            var bin = this.result;
                            var newFile = document.createElement('div');
                            newFile.classList.add('col-sm-6');
                            newFile.innerHTML = 'Loaded : ' + file.name + ' size ' + file.size + ' B';
                            list.appendChild(newFile);
                            var fileNumber = list.getElementsByTagName('div').length;
                            status.innerHTML = fileNumber < files.length ?
                                'Loaded 100% of file ' + fileNumber + ' of ' + files.length + '...' :
                                'Done loading. processed ' + fileNumber + ' files.';

                            var img = document.createElement("img");
                            img.classList.add('img-thumbnail');
                            img.classList.add('rounded');
                            img.file = file;
                            img.src = bin;
                            newFile.appendChild(img);
                        }.bindToEventHandler(file));
                    }
                    return false;
                });
                Function.prototype.bindToEventHandler = function bindToEventHandler() {
                    var handler = this;
                    var boundParameters = Array.prototype.slice.call(arguments);
                    console.log(boundParameters);
                    //create closure
                    return function(e) {
                        e = e || window.event; // get window.event if e argument missing (in IE)
                        boundParameters.unshift(e);
                        handler.apply(this, boundParameters);
                    }
                };
            });
        } else {
            document.getElementById('status').innerHTML = 'Your browser does not support the HTML5 FileReader.';
        }

        function addEventHandler(obj, evt, handler) {
            if (obj.addEventListener) {
                // W3C method
                obj.addEventListener(evt, handler, false);
            } else if (obj.attachEvent) {
                // IE method.
                obj.attachEvent('on' + evt, handler);
            } else {
                // Old school method.
                obj['on' + evt] = handler;
            }
        }

        savePhoto = function (data) {

        }
    </script>

@endsection
