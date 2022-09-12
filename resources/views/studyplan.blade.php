<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Student</title>
  <!-- plugins:css -->
  @include("homecss");
</head>


<body>
  
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include("navhome")
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include("sidebar")
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

        <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Major</h4>
                      <p>Semester : 4</p><br>
                      <div class="card-description">
                      <button type="button" class="btn btn-primary btn-rounded" href="addplan">Add Study Plan</button>
                      </div>
                    </div>
                  </div>
                </div>
          </div>

        <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Student Study Plan</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ClassID</th>
                            <th>Course</th>
                            <th>day</th>
                            <th>sem</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $data)
                          <tr>
                            <td>{{$data->class}}</td>
                            <td>{{$data->cname}}</td>
                            <td>{{$data->day}}</td>
                            <td>{{$data->sem}}</td>
                         @endforeach
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

          
                
         </div>
                  <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include("footerhome")
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include("homescript")
  <!-- End custom js for this page-->


</body>



  </html>