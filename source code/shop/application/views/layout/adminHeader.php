<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>public/admin/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>LALA ADMIN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url() ?>public/admin/assets/css/dashboard.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?= base_url() ?>public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
      #map {
        height: 100%;
        width: 100%;
       }
    </style>

</head>

<body>
<!-- wrapper -->
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="<?= base_url() ?>admin" class="simple-text">
                   LALA ADMIN
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?= base_url() ?>admin">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>admin/user">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="./table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List <span class="caret"></span> </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Product </a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/product/insert">Add Product </a></li>
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/product/index">List Product</a></li>

                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"> Order </a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/order/index">List Order</a></li>

                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a  href="#"> Employee </a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/employee/insert">Add Employee </a></li>
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/employee/index">List Employee</a></li>

                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"> Customer </a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/customer/index">List Customer</a></li>

                                </ul>
                            </li>

                             <li class="dropdown-submenu">
                                <a data-toggle="modal" data-target="#myModal" tabindex="-1" href="#"> Review</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Add Review </a></li>
                                    <li><a tabindex="-1" href="#">List Review</a></li>

                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"> Post</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/post/insert">Add Post </a></li>
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/post/index">List Post</a></li>


                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"> Category</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/category/insert">Add Category </a></li>
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/category/index">List Category</a></li>

                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"> About Us</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/aboutUs/index">View About Us</a></li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a data-toggle="modal" data-target="#myModal" tabindex="-1" href="#"> Contact</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Edit Contact </a></li>
                                </ul>
                            </li>

                             <li class="dropdown-submenu">
                                <a href="#"> Admin Account</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/adminAccount/insert">Add Admin Account </a></li>
                                    <li><a tabindex="-1" href="<?= base_url() ?>admin/adminAccount/index">List Admin Account</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="<?= base_url() ?>admin/maps">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>admin/noti">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Lala Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
<!-- wrapper -->