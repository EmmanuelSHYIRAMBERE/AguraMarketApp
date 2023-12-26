<!DOCTYPE html>
<html>
<head>

    <base href="/public">

    <link rel="shortcut icon" href="assets/hero-banner.png" type="">
      <title>Pay Using Card - AguraMarket</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        .h1_style {
            text-align: center;
            padding-top: 120px;
            font-size: 40px;
            padding-bottom: 40px;
        }
    </style>
    
</head>
<body>

    <div class="hero_area">
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
            </li>
          </ul>
        </nav>

        <button
          class="nav-toggle-btn"
          aria-label="Toggle menu"
          data-nav-toggler
        >
          <ion-icon name="menu-outline" class="open"></ion-icon>
        </button>
      </div>
    </header>
            <!-- end header section -->
    
<div class="container">
    
    <h1 class="h1_style">Pay Using Card</h1>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                    <form 
                            role="form" 
                            action="{{ route('stripe.post', $totalprice) }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Pay Rwf{{$totalprice}}">
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>        
        </div>
    </div>
        
</div>

<!-- 
          - FOOTER
        -->  

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
      
      <!-- 
      - custom js link
    -->
    @include('welcome.script')
    
</body>
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
</html>