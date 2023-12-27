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
                            <h2 class="h2_font">Customer Orders</h2>

                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $order)

                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->product_title}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>{{$order->delivery_status}}</td>
                                <td><img src="/product/{{$order->image}}" alt=""></td>
                                <td>{{$order->updated_at}}</td>
                                <td>
                                    <a onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_order', $order->id)}}" class="btn btn-danger">Delete</a>
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
