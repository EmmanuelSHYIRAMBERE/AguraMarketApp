<!DOCTYPE html>
<html>
   <head>
      
    @include('home.css')
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
            @include('home.header')
            <!-- end header section -->
            <!-- slider section -->
            
            @include('home.slider')
            <!-- end slider section -->
         </div>
         
         <!-- product section -->
         @include('home.product')
         
         <!-- end product section -->
         
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->

      <!-- scripts -->
    @include('home.script')

   </body>
</html>