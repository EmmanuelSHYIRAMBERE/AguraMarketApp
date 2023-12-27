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
      <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5" style="margin-top: 40px;">

                @if(session()->has('message'))
                            <div class="alert alert-success">
                                
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                                {{session()->get('message')}}

                            </div>
                        @endif

                <h1 class="text-center card-title mb-3 contact_title">Let's Create Something AMAZING Together</h1>
                <form action="{{url('/make_contact')}}" method="POST">

                  @csrf

                  <div class="form-group">
                    <label>Names</label>
                    <input type="text" class="form-control p_input" placeholder="Enter your full name" name="names" required />
                  </div>
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control p_input" placeholder="Enter a company name" name="company_name" required />
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="text-lowercase form-control" placeholder="Enter your email address" name="email" required />
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control p_input" placeholder="Enter phone number" name="phone" required />
                  </div>
                  <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" placeholder="Enter your message" required></textarea>
                  </div>
                
                  <div class="text-center">
                    <button type="submit" class="btn btn-success">Send Your Message</button>
                  </div>
                  
                </form>
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
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <!-- footer end -->

    
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