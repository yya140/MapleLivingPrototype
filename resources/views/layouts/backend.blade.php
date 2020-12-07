<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>控制台-所有房源</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/listtyicons/style.css" rel="stylesheet">
    <link href="assets/plugins/menuzord/css/menuzord.css" rel="stylesheet">
    <link href="assets/plugins/map/css/map.css" rel="stylesheet">
    <link href="assets/plugins/selectric/selectric.css" rel="stylesheet">
    <link href="assets/plugins/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/revolution/css/settings.css" rel="stylesheet">
    <link href="assets/plugins/map/css/map.css" rel="stylesheet">
    <link href="assets/plugins/rateyo/jquery.rateyo.min.css" rel="stylesheet">
    <link href="assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/plugins/DataTables/Responsive-2.2.2/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="assets/css/style.css" rel="stylesheet" id="option_style">

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon">


    <!-- fileUpload -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="body" class="body-wrapper boxed-menu">

<div class="main-wrapper">
    <!-- HEADER -->
    <header class="header">
        <nav class="nav-menuzord navbar-sticky">
            <div class="container clearfix">
                <div id="menuzord" class="menuzord menuzord-responsive">

                    <a href="index.html" class="menuzord-brand">
                        <svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="140" height="44">
                            <path class="fill-primay"
                                  d="M0 44V0h139.813v44H0zM137.346 2.467H2.467v39.065h134.879V2.467z"/>
                            <path class="fill-primay"
                                  d="M120.927 22.389v11.095h-4.566V22.389a371.288 371.288 0 0 0-2.086-2.888 347.047 347.047 0 0 1-2.2-3.053 386.86 386.86 0 0 0-2.201-3.053c-.7-.959-1.395-1.922-2.086-2.888h5.617l5.255 7.287 5.222-7.287h5.649c.002 0-8.604 11.882-8.604 11.882zM98.034 33.484h-4.565V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-21.908 0H71.56V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-17.425-1.789c-.69.623-1.511 1.116-2.463 1.477-.953.361-1.987.542-3.104.542-1.007 0-1.982-.143-2.923-.427a10.814 10.814 0 0 1-2.661-1.214h.033a9.928 9.928 0 0 1-1.577-1.215 18.73 18.73 0 0 1-.953-.952l3.416-3.151c.153.197.399.432.739.706.339.274.728.537 1.166.788.44.253.902.467 1.38.64.481.175.941.262 1.379.262.372 0 .744-.044 1.117-.131.359-.082.703-.22 1.018-.41.305-.185.564-.437.755-.739.197-.306.296-.689.296-1.149 0-.175-.06-.366-.181-.574-.12-.208-.329-.432-.624-.673-.296-.241-.706-.498-1.232-.771a20.567 20.567 0 0 0-1.971-.87 25.42 25.42 0 0 1-2.562-1.132 8.896 8.896 0 0 1-2.053-1.428 5.903 5.903 0 0 1-1.347-1.871c-.317-.7-.476-1.51-.476-2.429 0-.94.175-1.822.526-2.642a6.21 6.21 0 0 1 1.494-2.133c.646-.602 1.423-1.072 2.332-1.412.908-.339 1.911-.509 3.006-.509.591 0 1.22.077 1.889.23.668.153 1.319.35 1.954.591a12.95 12.95 0 0 1 1.79.837c.558.317 1.023.64 1.396.968l-2.825 3.545a15.71 15.71 0 0 0-1.281-.788 10.316 10.316 0 0 0-1.281-.558 4.311 4.311 0 0 0-1.478-.263c-.919 0-1.637.181-2.151.542-.515.361-.772.881-.772 1.559 0 .307.093.586.279.837.186.252.438.482.756.689.348.225.717.417 1.1.574.416.176.854.34 1.314.492 1.314.504 2.42 1.013 3.318 1.526.898.514 1.62 1.062 2.168 1.642s.936 1.204 1.166 1.871c.23.668.345 1.395.345 2.183 0 .963-.197 1.871-.591 2.724a6.803 6.803 0 0 1-1.626 2.216zM34.839 10.507h4.532v22.977h-4.532V10.507zm-20.036 0h4.566v18.415h9.263v4.563H14.803V10.507z"/>
                        </svg>
                    </a>

                    <div class="menu-right">
                        <div class="avatar">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" data-display="static"
                               aria-expanded="false">
                                <img class="avatar-img" src="assets/img/user/user-1.jpg" alt="Image">
                                <span class="avatar-name">
                                    @if(Auth::check())
                                        {{Auth::user() -> name}}
                                    @endif
                      <span class="small">管理员</span>
                    </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="d-flex flex-wrap align-items-center" href="{{ route('logout') }}">
                                        <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                        <span>退出登录</span>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <ul class="menuzord-menu menuzord-right">
                        <li class="active">
                            <a href="javascript:0">首页</a>
                        </li>
                        <li class="">
                            <a href="javascript:0">房源</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>

    </header>


    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="dashboard-stie-admin.html">
                            <i class="fa fa-tachometer" aria-hidden="true"></i> 控制台首页 <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="admin-listings.html">
                            <i class="fa fa-list-ul" aria-hidden="true"></i> 所有房源 </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="user-list-owners.html">
                            <i class="fa fa-users" aria-hidden="true"></i> 租客群 </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="user-generals.html">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> 房东群 </a>
                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0 position-relative d-none d-md-block">
                    <input class="form-control-sm" placeholder="搜索" aria-label="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')


</div> <!-- element wrapper ends -->

<!-- footer -->
<footer class="py-6 bg-white shadow">
    <div class="container">
        <div class="text-muted">
            <p class="mb-0">
                Copyright &copy; 2019. All Rights Reserved by
                <a href="http://www.iamabdus.com/" target="_blank"> Abdus</a>
            </p>
        </div>
    </div>
</footer>

<!-- JAVASCRIPTS -->

<script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/plugins/menuzord/js/menuzord.js"></script>
<script src="assets/plugins/selectric/jquery.selectric.min.js"></script>
<script src="assets/plugins/dzsparallaxer/dzsparallaxer.js"></script>
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script src="assets/plugins/smoothscroll/SmoothScroll.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/rateyo/jquery.rateyo.min.js"></script>
<script src="assets/plugins/apexcharts/apexcharts.js"></script>

<script src="assets/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/DataTables/Responsive-2.2.2/js/dataTables.responsive.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
<script src="assets/plugins/map/js/markerclusterer.js"></script>
<script src="assets/plugins/map/js/rich-marker.js"></script>
<script src="assets/plugins/map/js/infobox_packed.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Flot -->
<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.js"></script>
<script src="assets/js/chart.js"></script>

<script src="assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.js"></script>


<script src="assets/js/listty.js"></script>

</body>
</html>



