<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->

        <base href="/public">

        @include('admin.css')
        <style type="text/css">
            .div_center{
                text-align: center;
                padding-top: 40px;
            }
            .h2_font {
                font-size: 40px;
                padding-bottom: 40px;
            }
            .input_color {
                color: black;
            }
            .center {
                margin: auto;
                width: 50%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid white;
            }
            .form_margin {
                margin-bottom: 20px;
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
                            <h2 class="h2_font">Add Service</h2>

                            <form class="form_margin" action="{{url('/add_service')}}" method="POST">

                                @csrf

                                <input type="text" class="input_color" name="title" placeholder="Write service title">
                                <input type="text" class="input_color" name="body" placeholder="Write service description">
                                <input type="submit" class="btn btn-primary" name="submit" value="Add Service">
                            </form>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Service Title</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $data)

                            <tr>
                                <td>{{$data->service_title}}</td>
                                <td>{{$data->service_body}}</td>
                                <td>
                                    <a href="{{url('update_service', $data->id)}}" class="btn btn-success">Edit</a>
                                    <a onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_service', $data->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                      </table>
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
