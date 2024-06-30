<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Options</h2>
                <p>Siap melayani sampai kalian wangi</p>
                <p>Ayo dipilih...dipilih</p>
             </div>
          </div>
       </div>
           
       <div class="row">
         @foreach ($option as $options)

          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img style="height: 200px; width: 360px;" src="option/{{$options->image}}" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{$options->option_title}}</h3>
                   <p>{{$options->description}}</p>
                   <p>{{$options->price}}/day</p>

                  <a class="btn btn-primary" href="{{url('detail', $options->id)}}">Ambil</a>

                </div>
             </div>
          </div>

          @endforeach
         
       </div>
    </div>
 </div>