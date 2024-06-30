<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admin/img/avatar1.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">SELF LOVER</h1>
        <p>PEM WEB 3</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Laundry Options</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('create_option')}}">Add Options</a></li>
                <li><a href="{{url('view_option')}}">View Options</a></li>
              </ul>
            </li>
            <li><a href="{{url('bookings')}}"> <i class="icon-home"></i>Booking</a></li>
            <li><a href="{{url('messages')}}"> <i class="icon-windows"></i>Messages</a></li>
    </ul>
  </nav>