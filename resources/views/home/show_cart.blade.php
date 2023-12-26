<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="AguraMarket is your best digital marketing agency in journey of online success" />
      <meta name="author" content="AguraMarket" />
      <link rel="shortcut icon" href="assets/hero-banner.png" type="">
      <title>AguraMarket</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
       <!-- plugins:css -->
        <link
            rel="stylesheet"
            href="admin/assets/vendors/mdi/css/materialdesignicons.min.css"
        />
        <link
            rel="stylesheet"
            href="admin/assets/vendors/css/vendor.bundle.base.css"
        />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="admin/assets/vendors/jvectormap/jquery-jvectormap.css"
        />
        <link
            rel="stylesheet"
            href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css"
        />
        <link
            rel="stylesheet"
            href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css"
        />
        <link
            rel="stylesheet"
            href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css"
        />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="admin/assets/css/style.css" />
        <!-- End layout styles -->

    <!-- 
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="/welcomeimages/favicon.svg"
      type="image/svg+xml"
    />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="welcome/assets//css/style.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <style>
        .form-control {
                color: #000000;
                background-color: transparent;
            }
        .thead {
            height: 40px;
            background: skyblue;
        }
        .th {
            font-size: 40px;
            font-weight: bold;
        }
        .total_price {
            font-size: 30px;
            padding: 40px;
            font-weight: bold;
        }
    </style>
      
   </head>
   <body>
         <!-- header section strats -->
            <header class="header" data-header>
      <div class="container">
        

      
        <a href="{{url('/')}}" class="logo">AguraMarket</a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="{{url('/')}}" class="navbar-link" data-nav-link>Home</a>
              <a href="#services" class="navbar-link" data-nav-link>Services</a>
              <a href="{{url('/shop')}}" class="navbar-link" data-nav-link>Shop</a>
              <a href="#about" class="navbar-link" data-nav-link>About</a>
              <a href="{{url('/shop')}}#blog" class="navbar-link" data-nav-link>Blog</a>
              <a href="{{url('/contact')}}" class="navbar-link" data-nav-link
                >Contact Us</a
              >
              @if (Route::has('login'))
              <div class="butt">
                
                @auth
                <x-app-layout>
    
                </x-app-layout>
                @else
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-danger register">Register</a>
                @endif
                @endauth
              </div>
              @endif
            </li>
          </ul>
        </nav>

        <button
          class="nav-toggle-btn"
          aria-label="Toggle menu"
          data-nav-toggler
        >
          <ion-icon name="menu-outline" class="open"></ion-icon>
          <ion-icon name="close-outline" class="close"></ion-icon>
        </button>
      </div>
    </header>
            <!-- end header section -->
            
      <!-- contact section -->
      <div class="container-scroller" style="padding: 70px;">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-12 grid-margin stretch-card">
              <div class="card-body px-5 py-5">

                @if(session()->has('message'))
                            <div class="alert alert-success">
                                
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                                {{session()->get('message')}}

                            </div>
                        @endif

                    <h1 class="text-center card-title mb-3">Products</h1>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class="thead">
                          <tr>
                            <th>Product Title</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Product Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                            $totalprice =0;
                        ?>

                        @foreach($cart as $carts)

                            <tr>
                              <td>{{$carts->product_title}}</td>
                              <td>{{$carts->quantity}}</td>
                              <td>Rwf{{$carts->price}}</td>
                              <td><img src="product/{{$carts->image}}" alt=""></td>
                              <td>
                                <a onclick="return confirm('Are You Sure To Remove This Product')" href="{{url('remove_cart', $carts->id)}}" class="btn btn-success">Remove Product</a>
                            </td>
                            </tr>

                        <?php
                            $totalprice = $totalprice + $carts->price;
                        ?>

                        @endforeach

                        </tbody>
                      </table>

                      <div>
                        <h1 class="total_price">Total Price : {{$totalprice}}</h1>
                      </div>

                      <div class="payment">
                        <h1 style="font-size: 25px; padding-bottom: 15px;">Proceesd to Order</h1>

                        <a href="{{ url('cash_order') }}" class="btn btn-danger"><i class="mdi mdi-cash-multiple"></i> Cash On Delivery</a>
                        <a href="{{ url('stripe', $totalprice) }}" class="btn btn-warning"><i class="mdi mdi-cards-outline"></i> Pay Using Card</a>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- footer start -->
      <footer style="background-color: #888888;">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3 class="text-danger">Menu</h3>
                        <ul class="">
                           <li><a href="{{url('/')}}">Home</a></li>
                           <li><a href="{{url('/')}}#about">About</a></li>
                           <li><a href="{{url('/')}}#service">Services</a></li>
                           <li><a href="{{url('/shop')}}#testmonial">Testimonial</a></li>
                           <li><a href="{{url('/shop')}}#blog">Blog</a></li>
                           <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3 class="text-danger">Account</h3>
                        <ul>
                           <li><a href="{{ route('dashboard') }}">Account</a></li>
                           <li><a href="#">Checkout</a></li>
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                           <li><a href="{{url('/shop')}}">Shopping</a></li>
                           <li><a href="#">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3 class="text-danger">For more info</h3>
                        
                        <div class="form_sub">
                           <div class="information_f text-light">
                             <p><strong><i class="mdi mdi-map-marker"></i> </strong> Kigali, Rwanda</p>
                             <p><strong><i class="mdi mdi-whatsapp"></i> </strong> +250 7-- --- ---</p>
                             <p><strong><i class="mdi mdi-email-open"></i> </strong> aguramarket6@gmail.com</p>
                           </div>
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <div class="template-demo">
                                      <button type="button" class="btn btn-social-icon-text btn-outline-facebook"><i class="mdi mdi-facebook"></i></button>
                                      <button type="button" class="btn btn-social-icon-text btn-outline-twitter"><i class="mdi mdi-twitter"></i></button>
                                      <button type="button" class="btn btn-social-icon-text btn-outline-linkedin"><i class="mdi mdi-linkedin"></i></button>
                                    </div>
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->

    
    <!-- container-scroller -->
         
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="{{url('/')}}">AguraMarket</a><br>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
      <!-- 
      - custom js link
    -->
    <script src="welcome/assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
      <!-- plugins:js -->
        <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="admin/assets/js/off-canvas.js"></script>
        <script src="admin/assets/js/hoverable-collapse.js"></script>
        <script src="admin/assets/js/misc.js"></script>
        <script src="admin/assets/js/settings.js"></script>
        <script src="admin/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="admin/assets/js/dashboard.js"></script>
   </body>
</html>