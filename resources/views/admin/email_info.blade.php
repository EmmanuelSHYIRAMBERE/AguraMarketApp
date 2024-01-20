<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->

        <base href="/public">


        @include('admin.css')

        <style>

            .div_center{
                text-align: center;
                padding-top: 40px;
                font-size: 40px;
                padding-bottom: 40px;
            }
            .form-control {
                color: #000000;
                background-color: transparent;
            }
        </style>
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
                @include('admin.sidebar')
                <!-- partial -->
                @include('admin.header')
                
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">

                    @if(session()->has('message'))
                            <div class="alert alert-success">
                                
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                                {{session()->get('message')}}

                            </div>
                        @endif

                        
                    <h1 class="div_center">Send Email to {{$order->email}}</h1>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{url('/send_user_email', $order->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="greeting">Email Greeting:</label>
                        <input type="text" class="form-control" id="greeting" name="greeting" placeholder="Write an email greeting" required>
                    </div>
                    <div class="form-group">
                      <label for="intro">Initial Message:</label>
                      <input class="form-control" id="intro" type="text" name="intro" placeholder="Write an email first line message" required>
                    </div>
                      <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea class="form-control" id="body" type="text" name="body" placeholder="Write an email body" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="button">Button Name:</label>
                        <input class="form-control" id="button" type="text" name="button" placeholder="Write an email button name" required>
                      </div>
                      <div class="form-group">
                        <label for="url">Url:</label>
                        <input class ="form-control" id="url" type="text" name="url" placeholder="Write an email url" required>
                      </div>
                      <div class="form-group">
                        <label for="remark">Remark:</label>
                        <input class="form-control" id="remark" type="text" name="remark" placeholder="Write an email last line message" required>
                      </div>
                      <button type="submit" class="btn btn-info mr-2">Send Email</button>
                    </form>
                  </div>
                </div>
            </div>


                    </div>
                </div>
                
                <!-- container-scroller -->
                @include('admin.script')
        
        <!-- End custom js for this page -->
    </body>
</html>
