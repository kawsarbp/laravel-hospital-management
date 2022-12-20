<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Health - Medical Center</title>

    <link rel="stylesheet" href="/frontend/assets/css/maicons.css">

    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/frontend/assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="/frontend/assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="/frontend/assets/css/theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword/frontend" aria-label="Username" aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Contact</a>
                    </li>
                    @if(Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <a class="nav-link" style="background: greenyellow;" href="{{ route('appointment.index') }}">My Appointment</a>
                            </li>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="nav-item">
                                    <a class="nav-link btn btn-primary ml-lg-3 text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('LogOut') }}
                                    </a>
                                </div>
                            </form>

                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}" >Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">  Register</a>
                            </li>
                        @endauth
                    @endif

                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card ">
                <div class="card-body">
                    <table class="table  table-bordered table-stripedtable-hover">
                        <tr>
                            <th>Doctor Name</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Cancel Appointment</th>
                        </tr>
                        @foreach($appoint as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ date('d-M-Y',strtotime($item['date'])) }}</td>
                            <td>{{ $item['message'] }}</td>
                            <td>{{ $item['status'] }}</td>
                            <td>
                                <a href="{{ route('appointment.destroy',$item->id) }}"  class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure cancel appointment.')" >Cancel</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="/frontend/assets/js/jquery-3.5.1.min.js"></script>

<script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>

<script src="/frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="/frontend/assets/vendor/wow/wow.min.js"></script>

<script src="/frontend/assets/js/theme.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if(session()->has('message'))
    <script>
        toastr.{{ session()->get('type') }}(" {!! session()->get('message') !!} ");
    </script>
@endif


</body>
</html>
