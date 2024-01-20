<section class="slider_section ">
   
            <div class="slider_bg_box" style="background-color: hsl(220, 5%, 49%);">
            </div>
            
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div style="padding-bottom: 30px;">
                                <form action="{{url('search_product')}}" method="get">
                                 <div class="div-row" style="display:inline-block; margin:5px">
                                    <div>
                                       <input type="text" name="search" placeholder="Search a Product" style="width: 250%; border-radius:20px; color:black; justify-content:center;">
                                    </div>
                                    <div>
                                       <input type="submit" value="Search" class="btn btn-secondary">
                                    </div>
                                 </div>

                                </form>
                            </div>
               <div class="carousel-inner">
                  

               @if(isset($data))
               @foreach($data as $index => $products)
                  <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div style="display: inline-flex; gap: 50px;">
                                 <div>
                                    <img src="product/{{ $products->image }}" style="border-radius: 50px;" alt="">

                                 </div>
                                 <div class="detail-box">
                                    <h1>{{$products->title}}</h1>
                                 <p>
                                     @if($products->discount_price!=null)
                                     <h6 class="text-primary">Discount Price : Rwf{{$products->discount_price}}</h6>
                                     <h6 class="text-danger" style="text-decoration: line-through;">Price : Rwf{{$products->price}}</h6>
                                     @else
                                     <h6 class="text-primary">Price : Rwf{{$products->price}}</h6>
                                     @endif
                                 </p>
                                 <div class="option_container">
                                    <div class="options">
                                       <a href="{{url('product_details', $products->id)}}" class="btn btn-danger text-primary">
                                       Details
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  @endforeach
                  @endif

               </div>
            </div>
         </section>