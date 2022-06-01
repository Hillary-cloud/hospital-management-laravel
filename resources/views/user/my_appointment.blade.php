<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Hospital-Management</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->

  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Hospital</span>-Management</a>

        {{-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Contact</a>
            </li>
            
            @if (Route::has('login'))
           
            @auth
            <li class="nav-item">
              <a class="nav-link bg-primary text-light" href="{{url('my_appointment')}}">My Appointment</a>
            </li>
              <x-app-layout>
              </x-app-layout>
            @else
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
              </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  {{-- <div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
      <div class="col-md-12" style="padding:50px">
          @php
              $i = 1;
          @endphp
          <table class="table table-striped">
              <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Doctor</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
              @foreach ($appoint as $item)
                  <tr>
                      <td>{{$i++}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->date}}</td>
                      <td>{{$item->doctor}}</td>
                      <td>{{$item->status}}</td>
                      <td>
                          <a href="cancel/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')">Cancel</a>
                      </td>
                  </tr>
              @endforeach
          
          </table>
      </div>
  </div> --}}

  <div>
    <style>
 
    </style>
   <div class="container" style="padding: 10px;">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <div class="col-md-6">My Appointment</div>
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
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Doctor</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($appoint as $item)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->phone}}</td>
                              <td>{{$item->date}}</td>
                              <td>Dr. {{$item->name}}</td>
                              <td>{{$item->status}}</td>
                              <td>
                                  <a href="cancel/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')">Cancel</a>
                              </td>
                          </tr>
                            @endforeach
                            </tbody>
                        </table>
                       {{-- {{$appoint->links()}} --}}
                    </div>
                </div>
            </div>
       </div>
   </div>
</div>


  {{-- <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer> --}}

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>