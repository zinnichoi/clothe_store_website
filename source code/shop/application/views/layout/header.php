<?php $sess_id = $this->session->userdata('user'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?= base_url() ?>">
<title><?= isset($title) ? $title : 'Online Clothes Store' ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?= base_url() ?>public/images/logo.png">
<!-- css  -->
<link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url() ?>public/css/style.scss" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url() ?>public/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url() ?>public/css/animate.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url() ?>public/css/flexslider.css" type="text/css" media="screen" /> 
<!-- //css -->

<!-- script -->
<script src="<?= base_url() ?>public/js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url() ?>public/js/bootstrap.js"></script>
<script src="<?= base_url() ?>public/js/custom.js"></script>
<!-- //script -->
    <!-- FlexSlider -->

</head>

<body>
<div class="header-top">
    <div class="container">
        <div class="col-md-6 logo">
            <a href="home"><img src="<?= base_url() ?>public/images/logo.png" alt=" " /><h1>LALA<span>STORE</span></h1></a>
        </div>
        <div class="col-md-6 phone">
            <ul>
                <li><a href="login/login"><span class=/"glyphicon glyphicon-user" aria-hidden="true"></span><?php if(empty($sess_id)){echo "Login" ;} ?> </a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0969896796</li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<section class="fullnav">
<div class="header-bottom">
    <div class="container">
        <div class="col-md-7">
            <nav class="navbar navbar-default ">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class=" active"><a href="home" class="hyper "><span>HOME</span></a></li>  
                        <li class="dropdown ">
                            <a href="product/product/index" class="dropdown-toggle" data-toggle="dropdown" ><span>CLOTHING<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="product/get_product_by_cat/2"><i class="fa fa-angle-right" aria-hidden="true"></i>Women's Clothing</a></li>
                                                <li><a href="product/get_product_by_cat/1"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's Clothing</a></li>
                                                <li><a href="product/get_product_by_cat/11"> <i class="fa fa-angle-right" aria-hidden="true"></i>Kid's Wear</a></li>
                                            </ul>
                                        <div class="clearfix"></div>
                                    </div>  
                                </ul>
                                </li>
                        <li><a href="post/post/index" class="hyper"><span>NEWS</span></a></li>
                        <li><a href="contact/contact/insert" class="hyper"><span>CONTACT US</span></a></li>
                        <li><a href="aboutus/aboutus/index" class="hyper"><span>ABOUT</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <script>
                $(document).ready(function(){
                    $(".dropdown").hover(            
                        function() {
                            $('.multi', this).stop( true, true ).slideDown("slow");
                            $(this).toggleClass('open');        
                        },
                        function() {
                            $('.multi', this).stop( true, true ).slideUp("fast");
                            $(this).toggleClass('open');       
                        }
                    );
                });
                </script>
                        </script>
        <div class="col-md-3 search-info">
            <form action="search/search_keyword" method="post">
                <input type="search" name="Search" placeholder="Search for a Product..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
            </form>
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart"> 
                <form action="cart/cart/index" method="post" class="last"> 
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" onclick="location.href='cart/cart/index';" type="submit" name="submit" value=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                </form>  
            </div>
        </div>
        <?php if(!empty($sess_id)){ ?>
        <div class="col-md-1 user-login">
            <div class="dropdown">
            <i style="margin:9px;color:#00e58b" class="fa fa-user fa-2x dropdown-toggle" aria-hidden="true"data-toggle="dropdown"><span class="caret"></span></i>
        <ul class="dropdown-menu">
            <li><a href="profile/profile/update">Edit Information</a></li>
            <li><a href="cart/cart">Show Cart</a></li>
            <li><a href="#">History Transaction</a></li>
            <li><a href="login/logout">Logout</a></li>
          </ul>
        </div>
        </div>
        <?php } ?>
    </div>
</div>
</section>
