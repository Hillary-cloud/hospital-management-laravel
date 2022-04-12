<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
        <div class="container-fluid page-body-wrapper" style="padding:100px;">
            <div class="col-md-6">

                @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif

                <form action="{{url('edit_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                    @csrf
                    <label for="">Doctor's Name</label>
                    <input class="form-control text-black" type="text" value="{{$data->name}}" name="name" required><br>
                    <label for="">Doctor's Email</label>
                    <input class="form-control text-black" type="text" value="{{$data->email}}" name="email"  required><br>
                    <label for="">Doctor's Address</label>
                    <input class="form-control text-black" type="text" value="{{$data->address}}" name="address" required><br>
                    <label for="">Doctor's Phone</label>
                    <input class="form-control text-black" type="text" value="{{$data->phone}}" name="phone"  required><br>
                    <label for="">Doctor's Specialization</label>
                    <input class="form-control text-black" type="text" value="{{$data->specialization}}" name="specialization" required><br>
                    <label for="">Image</label>
                    <img src="doctorImage/{{$data->image}}" alt=""><br>
                    <label for="">Upload New Image</label>
                    <input type="file" class="" name="image" ><br><br>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>