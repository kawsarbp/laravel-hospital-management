<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="/backend/img/favicon.html">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/backend/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/backend/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/backend/css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="/backend/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="/backend/css/style.css" rel="stylesheet">
    <link href="/backend/css/style-responsive.css" rel="stylesheet" />

</head>

<body>

<section id="container">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <i class="fa fa-bars"></i>
        </div>
        <!--logo start-->
        <a href="{{ route('dashboard') }}" class="logo">Hos<span>Pital</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->

            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username">Jhon Doue</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout dropdown-menu-right">
                        <div class="log-arrow-up"></div>
                        <li><a href="javascript:void(0)"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        <i class="fa fa-key"></i>
                                        {{ __('LogOut') }}
                                    </a>
                                </div>
                            </form>
                        </li>

                    </ul>

                </li>
                <li class="sb-toggle-right">
                    <i class="fa  fa-align-right"></i>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-laptop"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="boxed_page.html">Boxed Page</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content" style="min-height: 600px;">
        <section class="wrapper">

            @yield('main-contant')

        </section>
    </section>
    <!--main content end-->



    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2018 &copy; FlatLab by VectorLab.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="/backend/js/jquery.js"></script>
<script src="/backend/js/bootstrap.bundle.min.js"></script>
<script class="include" type="text/javascript" src="/backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/backend/js/jquery.scrollTo.min.js"></script>
<script src="/backend/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/backend/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/backend/js/owl.carousel.js" ></script>
<script src="/backend/js/jquery.customSelect.min.js" ></script>
<script src="/backend/js/respond.min.js" ></script>

<!--right slidebar-->
<script src="/backend/js/slidebars.min.js"></script>

<!--common script for all pages-->
<script src="/backend/js/common-scripts5e1f.js?v=2"></script>

<!--script for this page-->
<script src="/backend/js/sparkline-chart.js"></script>
<script src="/backend/js/easy-pie-chart.js"></script>
<script src="/backend/js/count.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>
</html>

