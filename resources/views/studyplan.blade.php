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
                      @foreach($student as $student)
                      <h4 class="card-title">{{$student->majorid}}</h4>
                      <p>Semester : {{$student->semester}}</p><br>
                      <div class="card-description">
                      <a class="nav-link"  href="addplan"><button type="input" class="btn btn-primary btn-rounded">Add Study Plan</button></a>
                        @endforeach
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
                            <th>Lectures</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $data)
                          <tr>
                            <td>{{$data->classid}}</td>
                            <td>{{$data->cname}}</td>
                            <td>{{$data->day}}</td>
                            <td>{{$data->sem}}</td>
                            <td>{{$data->lname}}</td>
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