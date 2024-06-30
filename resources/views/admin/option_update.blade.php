<!DOCTYPE html>
<html>
    <head> 

        <base href="/public">

@include('admin.css')


    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }

    .div_deg
    {
        padding-top: 30px;
    }

    .div_center
    {
    text-align: center;
    padding-top: 40px;
    }
    </style>
    </head>
    <body>
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
        <div class="page-header">
        <div class="container-fluid">

            <div class="div_center">
                <h1 style="font-size: 30px; font-weight:bold;">Update Options</h1>
                <form action="{{url('option_edit', $data->id)}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">
                        <label>Option Title</label>
                        <input type="text" name="option_title" value="{{$data->option_title}}">
                    </div>

                    <div class="div_deg">
                        <label>Description</label>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>

                    <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div>


                    <div class="div_deg">
                        <label>Current Image</label>
                        <img style="margin: auto;" width="100" src="/option/{{$data->image}}">
                    </div>

                    <div class="div_deg">
                        <label>Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Update Options">
                    </div>

                </form>
            </div>

            </div>
        </div>
        </div>
        @include('admin.footer')
    </body>
</html>