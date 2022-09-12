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
                  <h4 class="card-title">Student Data</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>StudentID</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>Birth</th>
                            <th>Major</th>
                            <th>User Email</th>    
                            <th>Address</th>
                        
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $data)
                          <tr>
                            <td>{{$data->studentid}}</td>
                            <td>{{$data->stdname}}</td>
                            <td>{{$data->semester}}</td>
                            <td>{{$data->birth}}</td>
                            <td>{{$data->mjrname}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->address}}</td>
                            @endforeach
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