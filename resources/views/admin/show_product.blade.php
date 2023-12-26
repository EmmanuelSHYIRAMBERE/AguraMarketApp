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

                        <h1 class="font_size">All Products</h1>
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Product Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($product as $products)

                          <tr>
                            <td>{{$products->title}}</td>
                            <td>{{$products->description}}</td>
                            <td>{{$products->quantity}}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->discount_price}}</td>
                            <td>
                                <img src="/product/{{$products->image}}" alt="">
                            </td>
                            <td>
                                <a href="{{url('update_product', $products->id)}}" class="btn btn-success">Edit</a>
                                <a onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_product', $products->id)}}" class="btn btn-danger">Delete</a>
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
