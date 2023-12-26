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
            .form-control {
                color: #000000;
                background-color: transparent;
            }
            .product_image {
                margin-left: 20px;
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
                        
                    <h1 class="font_size">Add Product</h1>


                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                      <div class="form-group">
                        <label for="title">Product title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Write a tittle" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Product Description:</label>
                        <input class="form-control" id="description" type="text" name="description" placeholder="Write a description" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Product Price:</label>
                        <input class="form-control" id="price" type="number" name="price" placeholder="Write a price" required>
                      </div>
                      <div class="form-group">
                        <label for="discount">Discount Price:</label>
                        <input class="form-control" id="discount" type="number" name="discount" placeholder="Write a discount if applied">
                      </div>
                      <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input class="form-control" id="quantity" type="number"  min="0" name="quantity" placeholder="Write a quantity" required>
                      </div>
                      <div class="form-group">
                        <label for="category">Product Category:</label>
                                <select class="form-control" name="category" id="category" required>
                                    <option value="" selected>Add a category here</option>

                                    @foreach($category as $category)

                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                    @endforeach

                                </select>
                      </div>
                      <div class="form-group">
                        <label for="title">Product Image:</label>
                        <button class="btn btn-inverse-dark product_image">

                            <input class="" type="file" name="image" required>
                        </button>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Add Product</button>
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
