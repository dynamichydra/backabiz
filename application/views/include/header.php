<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
   <head>
      <!-- Basic page needs
         ============================================ -->
      <meta UTF-8>
      <meta name="description" content="">
      <meta name="author" content="">
      <title><?php echo $page_title;?></title>
      <!-- Mobile specific metas
         ============================================ -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- favicon
         ============================================ -->
      <link rel="shortcut icon" type="image/x-icon"  href="<?php echo base_url(); ?>assets/frontend/assets/images/favicon.png"/>
      <!-- Google web fonts
         ============================================ --
      <link href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700,800&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

      <!-- CSS  -->
      <!-- Bootstrap CSS
         ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap.css">
      <!-- font-awesome CSS
         ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/css/font-awesome.min.css">
      <!-- flexslider CSS
         ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/css/flexslider.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/passwordStyle.css" type="text/css" />
      <!-- menu-->
      <!-- main CSS
         ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/css/custom.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     </head>
     <body class="header-fixed page no-sidebar header-style-2 topbar-style-2">
      <div class="wrapper">
          <!-- header start -->
        <header>
          <div class="top-header">
             <div class="container">
                <div class="row">
                   <div class="col-md-6">
                      <ul class="top-menu-left">
                         <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                         <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                         <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                         <li><a href='#'><i class="fa fa-pinterest"></i></a></li>
                      </ul>
                   </div>
                   <div class="col-md-6">
                       <ul class="top-menu-right">
                         <?php
                          if(!empty($_SESSION['user'])){
                           ?>
                         <li><a href='<?php echo base_url('new-project')?>'><i class="fa fa-file-text-o"></i>Start a Project</a></li>
                         <?php
                       } else {
                         ?>
                         <li><a href='<?php echo base_url('home/login') ?>'><i class="fa fa-file-text-o"></i>Start a Project</a></li>
                         <?php
                       }
                         ?>

                         <?php
                          if(!empty($_SESSION['user'])){
                           ?>
                           <li><a href='<?php echo base_url('dashboard') ?>'><i class="fa fa-user"></i>My Account</a></li>
                           <li><a href='<?php echo base_url();?>home/logout'><i class="fa fa-power-off"></i>Logout</a></li>
                           <?php
                         } else {
                           ?>
                         <li><a href='<?php echo base_url('home/login') ?>'><i class="fa fa-sign-in"></i>Login / Register</a></li>
                         <?php
                       }
                         ?>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div id="site-header">
                <div id="site-header-inner" class="container">
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <a href="<?php echo base_url()?>" rel="home" class="main-logo">
                                    <img src="<?php echo base_url(); ?>assets/images/backabiz.svg" alt="Backabiz" width="186">
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="menu-item"><a href="<?php echo base_url('home/about') ?>">About</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="<?php echo base_url('project/projects') ?>">Explore <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                      <?php
                    if (isset($category)) {
                      foreach ($category as $key=>$value) {

                       ?>
                     <li class="menu-item"><a href="<?php echo base_url('project/category/').$value['cat_name']?>">&nbsp;<?php echo $value['cat_name']?></a></li>
                                     <?php
                       }
                     }
                     ?>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="news.html">News</a></li>
                                <li class="menu-item"><a href="<?php echo base_url('home/faqs') ?>">Faqs</a></li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav><!-- /#main-nav -->

                    </div><!-- /.wrap-inner -->
                </div><!-- /#site-header-inner -->
            </div><!-- /#site-header -->
            <style>
        .text.text{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            line-height: 16px;
            max-height: 100px;

            /* The number of lines to be displayed */
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
        }
    </style>

            <script>
            $(function($) {
  let url = window.location.href;
  $('nav ul li a').each(function() {
    if (this.href === url) {
      $(this).closest('li').addClass('menu-item current-menu-item');
    }
  });
});
            </script>


        </header>
