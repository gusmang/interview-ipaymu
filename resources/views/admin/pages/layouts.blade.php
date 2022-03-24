<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    @include('admin.global.top')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout" >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Administrator Page</p>
        </div>
    </div>

    <div id="loader_pr"  style="display:none; position:fixed; width:100%; height:100%; z-index:100000000; background:rgba(50,50,50,0.8); overflow:hidden;">
        <div class="loader" style="color:#FFFF00;">
            <div class="loader__figure" style="border:0 solid #FFFF00;"></div>
            <p class="loader__label" style="color:#FFFF00;">Upload Data .. Please Wait</p>
        </div>
    </div>

    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="z-index:910!important;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3" style="margin:0; padding:0 5px;"><img src="<?php echo url('public'); ?>/logo-icon.svg" alt="homepage" class="light-logo" style="filter: invert(100%) sepia(0%) saturate(22%) hue-rotate(191deg) brightness(104%) contrast(102%);" /></div>
                            <div class="col-md-9" style="margin:0; padding:0;">
                                <div class="col-md-11" style="padding:0 5px 0 5px; box-sizing:border-box;">
                                    <h4 style="text-size:28px; font-weight:bold; color:#FFFFFF; margin-top:20px; padding:0; margin:10px 0 0 0;"> IPAYMU </h4> <div style="color:#FFFFFF; text-size:11px; margin-top:-25px;"> <small>Administrator Page</small> </div> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <a class="navbar-brand" href="index.html">
                        Logo icon<b>
                            You can put here icon as well // <i class="wi wi-sunset"></i> //                        
                            Light Logo icon
                            
                        </b>
                    End Logo icon 
                        
                    </a> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <!-- <input type="text" class="form-control" placeholder="Search & enter"> -->
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <h4 style="color:#FFFFFF;"><b> ADMINISTRATOR PAGE </b> &nbsp; &nbsp;</h4>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.global.menu')

        @include('admin.global.footer')

        <div class="page-wrapper"  style="background:rgba(27, 163, 156,0.1)!important;">

        @yield('isi_menu')

        </div>

        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
       
        <footer class="footer">
            © 2021 by 
            <a href="https://balikencana-dev.com/"><b> BaliKencana-Dev </b></a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
   
</body>

</html>