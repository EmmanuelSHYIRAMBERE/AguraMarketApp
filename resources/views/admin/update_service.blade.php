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
            }
            .h2_font {
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

                        <div class="div_center">
                            <h2 class="h2_font">Update Service</h2>


                            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{url('/update_service_confirm', $service->id)}}" method="POST">

                        @csrf

                      <div class="form-group">
                        <label for="title">Service Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Write a campaign name" required value="{{$service->service_title}}">
                      </div>
                      <div class="form-group">
                        <label for="body">Service Details:</label>
                        <input type="text" class="form-control" id="body" name="body" placeholder="Write a campaign objective" required value="{{$service->service_body}}">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" value="Update Service">Update Service</button>
                    </form>
                  </div>
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
