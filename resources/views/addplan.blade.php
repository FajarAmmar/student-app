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
            <div class="col-md-12 grid-margin">
            <!--content -->
              
            <div class="col-lg-8 grid-margin stretch-card">
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
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($plan as $pl)
                          <tr>
                            <td>{{$pl->classid}}</td>
                            <td>{{$pl->cname}}</td>
                            <td>{{$pl->day}}</td>
                            <td>{{$pl->sem}}</td>
                            <td><button type="button" class="btn btn-outline-danger btn-fw">Delete</button></td>
                         @endforeach
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Course</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Class ID</th>
                          <th>Course Name</th>
                          <th>Day</th>
                          <th>Semester</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $dt)
                        <tr>
                         <td>{{$dt->classid}}</td>
                         <td>{{$dt->course}}</td>
                         <td>{{$dt->day}}</td>
                         <td>{{$dt->semester}}</td>
                         <td>
                         <a class="nav-link"  href="{{url('/updateplan' , $dt->classid)}}"> <button type="button" class="btn btn-outline-info btn-fw">Add</button></a>
                         </td>
                         @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                
              </div>
            </div>
            <!-- endcontent -->
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