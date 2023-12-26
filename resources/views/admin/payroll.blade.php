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

                       
                    </div>
                </div>
                
                <!-- container-scroller -->
                @include('admin.script')
        
            <!-- End custom js for this page -->
    </body>
</html>
