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
        <div class="container-fluid page-body-wrapper" style="padding-top:100px;">
            <div class="col-md-12">
            
                @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                @php
                    $i = 1;
                @endphp
                <table class="table text-light table-responsive">
                 <tr class="text-dark bg-light">
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Date</th>
                     <th>Doctor</th>
                     <th>Status</th>
                     <th>Action</th>
                 </tr>
                 @foreach ($data as $item)
                     <tr>
                         <td>{{$i++}}</td>
                         <td>{{$item->name}}</td>
                         <td>{{$item->email}}</td>
                         <td>{{$item->phone}}</td>
                         <td>{{$item->date}}</td>
                         <td>{{$item->doctor}}</td>
                         <td>{{$item->status}}</td>
                         <td>
                            <a href="approve/{{$item->id}}" class="btn btn-sm btn-primary">Approve</a>
                            <a href="decline/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to decline this appointment?')">Decline</a>
                         </td>
                     </tr>
                 @endforeach
             </table>
         </div>
        </div>
    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>