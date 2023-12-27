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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
      .contact_title {
        text-align: center;
                padding-top: 40px;
                font-size: 40px;
                padding-bottom: 40px;
      }
        .form-control {
                color: skyblue;
                background-color: transparent;
            }
    </style>
      
   </head>
   <body>
         <!-- header section strats -->
         @include('home.header')
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
      @include('home.footer')
      <!-- footer end -->

    
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