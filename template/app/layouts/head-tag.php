<!DOCTYPE html>
<html class="no-js" dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <title><?php echo $setting['title'];?></title>
    <base href="">
    <meta name="googlebot" content="index,follow">
    <meta name="robots" content="noodp,noydir">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin-panel/public/css/app/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin-panel/public/css/app/bootstrap-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin-panel/public/css/app/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin-panel/public/css/app/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin-panel/public/css/app/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin-panel/public/css/app/slicknav.min.css">
    <script src="http://localhost/admin-panel/public/js/app/jquery.min.js"></script>
</head>

<body>
<script src="http://localhost/admin-panel/public/js/app/modernizr.js"></script>

<!--#region top-menu-->
<div class="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="header-link">
                    <ul>
                        <li><a href="login.html">ورود</a></li>
                        <li><a href="register.html">عضویت</a></li>
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">درباره ما</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
                <div class="header-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--#endregion-->

<!--#region header-->
<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <a href="#" class="logo"><img src="http://localhost/admin-panel/<?php echo $setting['logo'];?>" alt="logo" title=""></a>
                <div class="left-side">
                    <h1><a href=""><?php echo $setting['description'];?></a></h1>
                    <h2><?php echo $setting['title'];?></h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form action="" method="get" class="border-radius">
                    <input class="border-radius" type="text" placeholder=" جستجو کنید ... ">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>
<!--#endregion-->

<!--#region menu-->
<div class="main-menu">
    <div class="container">
        <div id="demo2"></div>
        <nav>
            <ul id="menu">
                <?php foreach ($menus as $menu){?>
                <li>
                    <?php if ($menu['parent_id']==null){?>
                    <a href="<?php echo $menu['url'];?>"><?php echo $menu['name'];?></a>
                    <?php }?>
                    <?php if ($menu['submenu_count']>0){?>
                    <ul>
                        <?php foreach ($submenus as $submenu){?>
                            <?php if ($submenu['parent_id']==$menu['id']){?>
                        <li><a href="<?php echo $submenu['url'];?>"><?php echo $submenu['name'];?></a></li>
                        <?php }}?>
                    </ul>
                    <?php }?>
                </li>
                <?php }?>
            </ul>
        </nav>
    </div>
</div>
<!--#endregion-->