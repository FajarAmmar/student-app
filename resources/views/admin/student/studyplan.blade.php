<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller">

      @include("admin.navbar")

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
                            <th>Student Name</th>
                            <th>Day</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $data)
                          <tr>
                            <td>{{$data->classid}}</td>
                            <td>{{$data->csname}}</td>
                            <td>{{$data->stname}}</td>
                            <td>{{$data->day}}</td>
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
    <!-- container-scroller -->
   @include('admin.adminscript')
  </body>
</html>