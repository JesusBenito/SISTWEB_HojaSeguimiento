<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Control de Actividades</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Editable CSS -->
    <link type="text/css" rel="stylesheet" href="plugins/bower_components/jsgrid/dist/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css" />
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/green-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header">
<!-- Preloader
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>-->
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <!-- .Logo --->
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)">
                        <!--This is logo text--><img src="images/VLIM_ti.png" alt="home"
                                                     class="light-logo" alt="home" href="dashboard" style="width: 150px;"/></a>
                </li>
            </ul>
            <!-- /.Logo -->
            <!-- top right panel -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <!-- .dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img
                                src="plugins/images/users/profile.png" alt="user-img" width="36" class="img-circle"><b
                                class="hidden-xs">Administrador</b> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- top right panel -->
        </div>
    </nav>
    <!-- End Top Navigation -->
    <!-- .Side panel -->
    <div class="side-mini-panel">
        <ul class="mini-nav">
            <div class="togglediv"><a href="javascript:void(0)" id="togglebtn"><i class="ti-menu"></i></a></div>
            <!-- .Dashboard -->
            <li class="selected">
                <a href="javascript:void(0)"><i class="linea-icon linea-basic" data-icon="v"></i></a>
                <div class="sidebarmenu">
                    <!-- Left navbar-header -->
                    <h3 class="menu-title">Dashboard</h3>
                    <ul class="sidebar-menu">
                        <li><a href="dashboard">Inicio</a></li>
                        <li><a href="colaboradores">Colaboradores</a></li>
                        <li><a href="estatus">Estatus</a></li>
                        <li><a href="areas">Áreas</a></li>
                        <li><a href="proyectos">Proyectos</a></li>
                        <li><a href="clientes">Clientes</a></li>
                    </ul>
                    <!-- Left navbar-header end -->
                </div>
            </li>
            <!-- /.Dashboard -->
            <!-- .Actividades -->
            <li class=""><a href="javascript:void(0)"><i data-icon="&#xe00b;" class="icon-note"></i></a>
                <div class="sidebarmenu">
                    <!-- Left navbar-header -->
                    <a href="actividades">
                        <h3 class="menu-title">Actividades</h3>
                    </a>
                    <ul class="sidebar-menu">
                        <li><a href="agregarActividad">Agregar Actividades </a></li>
                    </ul>
                    <!-- Left navbar-header end -->
                </div>
            </li>
            <!-- /.Actividades -->
        </ul>
    </div>
    <!-- /.Side panel -->
    <!-- Page Content -->
    <div id="page-wrapper">