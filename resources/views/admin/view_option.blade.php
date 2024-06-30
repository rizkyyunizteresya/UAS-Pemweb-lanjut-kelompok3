<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type="text/css">
    
    .table_deg
    {
    border: 2px solid white;
    margin: auto;
    width: 50%;
    text-align: center;
    margin-top: 40px;
    }

    .th_deg
    {
        background-color: beige;
        padding: 20px;
    }

    tr
    {
        border: 3px solid white;
    }

    td 
    {
        padding: 10px;
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

                <table class="table_deg">
                    
                    <tr>
                        <th class="th_deg">Option Title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Update</th>
                    </tr>


                    @foreach ($data as $data)
                        
                    <tr>
                        <td>{{$data->option_title}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->price}}</td>
                        <td><img width="100" src="option/{{$data->image}}"></td>
                        <td><a class="btn btn-danger" href="{{url('option_delete', $data->id)}}">Delete</a></td>
                        <td><a class="btn btn-warning" href="{{url('option_update', $data->id)}}">Update</a></td>
                    </tr>

                    @endforeach

                </table>

          </div>
        </div>
      </div>
     
       @include('admin.footer')
  </body>
</html>