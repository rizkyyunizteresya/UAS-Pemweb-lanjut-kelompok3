<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>
      @include('home.slider')
      <!-- about -->
     @include('home.about')
      <!-- end about -->
      <!-- our_room -->
      @include('home.option')
      <!-- end our_room -->
      <!--  contact -->
      @include('home.contact')
      <!-- end contact -->
      <!--  footer -->
     @include('home.footer')
      <!-- end footer -->
      <!-- Javascript files-->
    <script>
      $(window).scroll(function() {
  sessionStorage.scrolltop = $(this).scrolltop();
});

$(document).ready(function(){
   if(sessionStorage.scrolltop != "undefined"){
      $(window).scrolltop(sessionStorage.scrolltop);
   }
});
    </script>
   </body>
</html>