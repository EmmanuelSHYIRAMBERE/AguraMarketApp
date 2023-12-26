<!DOCTYPE html>
<html>
   <head>
   
   <base href="/public">

    @include('home.css')
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
            @include('home.header')
            <!-- end header section -->


            <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding: 30px;">

               @if(session()->has('message'))
                            <div class="alert alert-success">
                                
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                                {{session()->get('message')}}

                            </div>
                        @endif

                     <div class="img-box" style="padding: 20px;">
                        <img style="border-radius: 20px;" src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>

                        @if($product->discount_price!=null)

                        <h6 class="text-primary">Discount Price : 
                           Rwf{{$product->discount_price}}
                        </h6>

                        <h6 class="text-danger" style="text-decoration: line-through;">Price : 
                           Rwf{{$product->price}}
                        </h6>

                        @else

                        <h6 class="text-primary">Price : 
                           Rwf{{$product->price}}
                        </h6>

                        @endif

                        <h6>Product Category  : {{$product->category}}</h6>
                        <h6>Product Description : {{$product->description}}</h6>
                        <h6>Available Quantity : {{$product->quantity}}</h6>

                        <form action="{{url('add_cart', $product->id)}}" method="POST">

                              @csrf

                              <div class="row">

                                 <div class="col-md-4">
                                    <input type="number" name="quantity" value="1" min="1" style="width: 70px; color:black;">
                                 </div>

                                 <div class="col-md-4">
                                    <input type="submit" value="Add To Cart" style="width: 180px; border-radius: 30px;">
                                 </div>

                              </div>
                           </form>

                     </div>
                    </div>
               </div>
            
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      
      
      <div class="cpy_">
          <p class="mx-auto">© 2021 All Rights Reserved By <a href="{{url('/')}}">AguraMarket</a><br>
          
        </p>
    </div>

      <!-- scripts -->
    @include('home.script')

   </body>
</html>