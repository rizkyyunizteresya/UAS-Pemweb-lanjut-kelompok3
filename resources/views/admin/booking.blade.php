<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type="text/css">
    
    .table_deg
    {
    border: 2px solid white;
    margin: auto;
    width: 70%;
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
                    <th class="th_deg">Booking ID</th>
                    <th class="th_deg">Option</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Customer Name</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Start Date</th>
                    <th class="th_deg">End Date</th>
                    <th class="th_deg">Status</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Status Update</th>
                    <th class="th_deg">Image</th>
                </tr>


             
                    @foreach($data as $data)
                <tr>
                    <td>{{$data->option_id}}</td>
                    <td>{{$data->option->option_title}}</td>
                    <td>{{$data->option->price}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->start}}</td>
                    <td>{{$data->end}}</td>
                    <td>
                      @if ($data->status == 'approve')

                      <span style="color: green;">Approved</span>

                      @endif

                      @if ($data->status == 'rejected')

                      <span style="color: red;">Rejected</span>

                      @endif

                      @if ($data->status == 'waiting')

                      <span style="color: yellow;">Waiting</span>

                      @endif

                    </td>
                    <td><a class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a></td>
                    <td>
                      <span style="padding-bottom: 10px;"><a class="btn btn-success" href="{{url('approve_booking',$data->id)}}">Approve</a></span>
                      <a class="btn btn-warning" href="{{url('reject_booking',$data->id)}}">Reject</a>
                    </td>
                    <td>
                        <img style="width: 200px;" src="/option/{{$data->option->image}}">
                    </td>
                </tr>

                    @endforeach

              

            </table>


          </div>
        </div>
      </div>
     
       @include('admin.footer')
  </body>
</html>