<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.nav')
        <!-- partial -->
        {{-- <div class="col-md-12" style="padding: 100px;">
            
            @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <table class="table text-light">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Specialization</th>
                    <th>Action</th>
                </tr>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->id}}</td>
                        <td><img src="doctorImage/{{$doctor->image}}" alt=""></td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->email}}</td>
                        <td>{{$doctor->address}}</td>
                        <td>{{$doctor->specialization}}</td>
                        <td>
                            <a href="edit_doctor/{{$doctor->id}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete_doctor/{{$doctor->id}}" onclick="return confirm('You are about to delete this doctor')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div> --}}


        <div>
          <div class="container" style="padding: 10px;">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                               <div class="col-md-6">Doctor List</div>
                       </div>
                           <div class="panel-body">
                               @if (session('message'))
                                   <div class="alert alert-success">
                                   {{ session('message') }}
                                   </div>
                               @endif
                               @php
                               $i = 1;
                               @endphp
                                <table class="table text-light table-responsive">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Specialization</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$doctor->id}}</td>
                                            <td><img src="doctorImage/{{$doctor->image}}" alt=""></td>
                                            <td>{{$doctor->name}}</td>
                                            <td>{{$doctor->email}}</td>
                                            <td>{{$doctor->address}}</td>
                                            <td>{{$doctor->specialization}}</td>
                                            <td>
                                                <a href="edit_doctor/{{$doctor->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="delete_doctor/{{$doctor->id}}" onclick="return confirm('You are about to delete this doctor')" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                              {{-- {{$appoint->links()}} --}}
                           </div>
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