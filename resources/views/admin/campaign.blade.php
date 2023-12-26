<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')

        <style>

            .div_center{
                text-align: center;
                padding-top: 40px;
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

                        
                    <h1 class="div_center">Add Campaign</h1>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{url('/add_campaign')}}" method="POST">

                        @csrf

                      <div class="form-group">
                        <label for="campaignName">Campaign Name:</label>
                        <input type="text" class="form-control" id="campaignName" name="name" placeholder="Write a campaign name" required>
                      </div>
                      <div class="form-group">
                        <label for="campaignObjective">Campaign Objective:</label>
                        <input type="text" class="form-control" id="campaignObjective" name="objective" placeholder="Write a campaign objective" required>
                      </div>
                      <div class="form-group">
                        <label for="targetAudience">Target Audience:</label>
                        <input type="text" class="form-control" id="targetAudience" name="target_Audience" placeholder="Write a target audience" required>
                      </div>
                      <div class="form-group">
                        <label for="campaignBudget">Campaign Budget:</label>
                        <input type="number" class="form-control" id="campaignBudget" name="budget" placeholder="Write a campaign budget" required>
                      </div>
                      <div class="form-group">
                        <label for="campaignChannels">Campaign Channels:</label>
                        <input type="text" class="form-control" id="campaignChannels" name="channels" placeholder="Write a campaign channels" required>
                      </div>
                      <div class="form-group">
                        <label for="creativeAssets">Creative Assets:</label>
                        <input type="text" class="form-control" id="creativeAssets" name="creative_Assets" placeholder="Write a campaign creative assets" required>
                      </div>
                      <div class="form-group">
                        <label for="campaignMetrics">Campaign Metrics:</label>
                        <input type="text" class="form-control" id="campaignMetrics" name="metrics" placeholder="Write a campaign metrics if any">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" value="Add Campaign">Submit</button>
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
