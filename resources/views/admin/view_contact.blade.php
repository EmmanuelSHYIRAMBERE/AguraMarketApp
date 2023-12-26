<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
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

                        <h1 class="font_size">Contacts</h1>
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>User Names</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($contact as $contacts)

                          <tr>
                            <td>{{$contacts->names}}</td>
                            <td>{{$contacts->email}}</td>
                            <td>{{$contacts->subject}}</td>
                            <td>{{$contacts->message}}</td>
                            <td>
                                <a href="{{url('reply_contact', $contacts->id)}}" class="btn btn-success">Reply</a>
                                <a onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_contact', $contacts->id)}}" class="btn btn-danger">Delete</a>
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
