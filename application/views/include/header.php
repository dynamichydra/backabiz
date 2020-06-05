<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
   <head>
      <!-- Basic page needs
         ============================================ -->
      <meta UTF-8>
      <meta name="description" content="">
      <meta name="author" content="">
      <title><?php echo $page_title;?></title>
      <!-- <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
      <meta property="og:type"          content="BAckabiz" />
      <meta property="og:title"         content="BAckabiz" />
      <meta property="og:description"   content="<?php if(isset($description)) echo $description?>" />
      <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" /> -->
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
         <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/css/custom.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
      <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- jquery.flexslider.js -->
      <script src="<?php echo base_url(); ?>assets/js/flexslider-min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

      <!-- bootstrap js -->
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
      <!-- <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js"></script> -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

      


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
                         <li><a href='<?php echo base_url('new-campaign')?>'><i class="fa fa-file-text-o"></i>Start a Backabiz</a></li>
                         <?php
                       } else {
                         ?>
                         <li><a href='<?php echo base_url('home/login') ?>'><i class="fa fa-file-text-o"></i>Start a Backabiz</a></li>
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
                                <li class="menu-item"><a href="<?php echo base_url('about') ?>">About</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a >How it works <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                      <li class="menu-item"><a href="<?php echo base_url('how-backabiz-works') ?>">How Backabiz Works</a></li>
                                      <li class="menu-item"><a href="<?php echo base_url('why-Backabiz') ?>">Why Backabiz</a></li>
                                      <li class="menu-item"><a href="<?php echo base_url('FAQs') ?>">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                  <a href="<?php echo base_url('All-Campaigns') ?>">Explore <i class="fa fa-angle-down"></i></a>
                                  <ul class="sub-menu">

                                      <?php
                    if (isset($category)) {
                      foreach ($category as $key=>$value) {

                       ?>
                       <?php
                 $url = str_replace(' ','-',$value['cat_name']);
                 $url = str_replace(":",'',$url);
                 $url = str_replace("'",'',$url);
                 // $url = str_replace("%26",'&',$url);
             ?>
                     <li class="menu-item"><a href="<?php echo base_url('All-Campaigns/').$url;?>">&nbsp;<?php echo $value['cat_name']?></a></li>
                                     <?php
                       }
                     }
                     ?>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="<?php echo base_url('blogs') ?>">Blog</a></li>
                                <!-- <li class="menu-item"><a href="<?php echo base_url('home/faqs') ?>">Faqs</a></li> -->
                                <li class="menu-item"><a href="<?php echo base_url('contact') ?>">Contact</a></li>
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
