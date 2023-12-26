<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')

        <style>
            .font_size{
                text-align: center;
                padding-top: 40px;
                font-size: 40px;
                padding-bottom: 40px;
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

                        <h1 class="font_size">All Campaigns</h1>
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Campaigns Name</th>
                            <th>Campaigns Budget</th>
                            <th>Channels</th>
                            <th>Creative Assets</th>
                            <th>Objective</th>
                            <th>Target Audience</th>
                            <th>Campaigns Metrics</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($campaign as $campaigns)

                          <tr>
                            <td>{{$campaigns->name}}</td>
                            <td>{{$campaigns->budget}}</td>
                            <td>{{$campaigns->channels}}</td>
                            <td>{{$campaigns->creative_Assets}}</td>
                            <td>{{$campaigns->objective}}</td>
                            <td>{{$campaigns->target_Audience}}</td>
                            <td>{{$campaigns->metrics}}</td>
                            <td>
                                <a href="{{url('update_campaign', $campaigns->id)}}" class="btn btn-success">Edit</a>
                                <a onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_campaign', $campaigns->id)}}" class="btn btn-danger">Delete</a>
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
