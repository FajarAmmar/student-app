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
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Aamir</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
              </div>
              </div>
              </div>

              <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <p class="card-title">Notification</p>
                  <div>
                    @foreach($dataannoun as $announc)
                      <h2 class="font-weight-500">{{$announc->name}}</h2>
                      <p>{{$announc->announ}}</p>
                      <br>
                    @endforeach
                    <div>
                  
                
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