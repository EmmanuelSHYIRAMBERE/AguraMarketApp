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

                            <div style="padding-bottom: 30px;">
                                <form action="{{url('search')}}" method="get">
                                    <input type="text" name="search" placeholder="Search For Something" style="width: 40%; border-radius:20px; color:black;">

                                    <input type="submit" value="Search" class="btn btn-outline-primary">
                                </form>
                            </div>

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
                            <th>Total Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Image</th>
                            <th>Change Status</th>
                            <th>Print</th>
                            <th>Connect</th>
                          </tr>
                        </thead>
                        <tbody>

                        @forelse($order as $order)

                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->product_title}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>Rwf {{$order->price}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>{{$order->delivery_status}}</td>
                                <td><img src="/product/{{$order->image}}" alt=""></td>
                                <td>
                                    @if($order->delivery_status == "processing")
                                    <a onclick="return confirm('Are you sure this product is delivered')" href="{{url('delivered', $order->id)}}" class="btn btn-danger">Delivered</a>
                                    @else
                                    <p class="text-success">Delivered</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('print_pdf', $order->id)}}" class="btn btn-secondary">PDF File</a>
                                </td>
                                <td>
                                    <a href="{{url('send_email', $order->id)}}" class="btn btn-info">Send Email</a>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td>
                                    <p colspan="16" class="text-danger h2_font" style="width: 100%;">There's no data found</p>

                                </td>
                            </tr>

                            @endforelse

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
