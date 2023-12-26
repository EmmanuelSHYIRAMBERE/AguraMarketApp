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
                            <h2 class="h2_font">Update Product Category</h2>

                            <form class="form_margin" action="{{url('/update_category_confirm', $category->id)}}" method="POST">

                                @csrf

                                <label for="category">Category Name:</label>
                                <input type="text" class="input_color" name="category" placeholder="Write category name" value="{{$category->category_name}}">
                                <input type="submit" class="btn btn-primary" name="submit" value="Update Category">
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- container-scroller -->
                @include('admin.script')
        
            <!-- End custom js for this page -->
    </body>
</html>
