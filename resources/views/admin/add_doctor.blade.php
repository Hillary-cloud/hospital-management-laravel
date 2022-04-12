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
        <div class="container-fluid page-body-wrapper" style="padding:100px;">
            <div class="col-md-6">

                @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif

                <form action="{{url('add_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Doctor's Name</label>
                    <input class="form-control text-black" type="text" name="name" placeholder="Enter Doctor's Name" required><br>
                    <label for="">Doctor's Email</label>
                    <input class="form-control text-black" type="text" name="email" placeholder="Enter Doctor's Email" required><br>
                    <label for="">Doctor's Address</label>
                    <input class="form-control text-black" type="text" name="address" placeholder="Enter Doctor's Address" required><br>
                    <label for="">Doctor's Phone</label>
                    <input class="form-control text-black" type="text" name="phone" placeholder="Enter Doctor's Phone" required><br>
                    <label for="">Doctor's Specialization</label>
                    <input class="form-control text-black" type="text" name="specialization" placeholder="Enter Doctor's Specialization" required><br>
                    <label for="">Upload Image</label>
                    <input type="file" class="" name="image" required><br><br>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>