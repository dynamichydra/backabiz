<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">      
   <head>
      <!-- Basic page needs
         ============================================ -->
      <meta UTF-8>
      <meta name="description" content="">
      <meta name="author" content="">    
      <title>Backabiz</title>           
      <!-- Mobile specific metas
         ============================================ -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- favicon
         ============================================ -->
      <link rel="shortcut icon" type="image/x-icon"  href="<?php echo base_url(); ?>assets/frontend/assets/images/favicon.png"/>
      <!-- Google web fonts
         ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700,800&display=swap" rel="stylesheet"> 
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
      <!-- menu-->
      <!-- main CSS
         ============================================ -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/css/custom.css"> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/style.css">
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
                         <li><a href='#'><i class="fa fa-file-text-o"></i>Start a Project</a></li>
                         <li><a href='#'><i class="fa fa-sign-in"></i>Login / Register</a></li>
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
                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/images/backabiz.svg" alt="Backabiz" width="186">
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">   
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item current-menu-item"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="menu-item"><a href="about.html">About</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="explore.html">Explore <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                                         <?php
                                       if (isset($category)) {
                                         foreach ($category as $key=>$value) {

                                          ?>
                                        <li class="menu-item"><a href="<?php echo base_url('category/'.$value['cat_name']);?>"><i class="<?php echo $value['icon_name']?>"></i><?php echo $value['cat_name']?></a></li>
                                                        <?php
                                          }
                                        }
                                        ?>
                                       <!--  <li class="menu-item"><a href="project-display.html"><i class="fa fa-puzzle-piece"></i>Design</a></li>
                                        <li class="menu-item"><a href="project-display.html"><i class="fa fa-film"></i> Film & Video</a></li>
                                        <li class="menu-item"><a href="project-display.html"><i class="fa fa-coffee"></i> Food</a></li>
                                        <li class="menu-item"><a href="project-display.html"><i class="fa fa-gamepad"></i> Games</a></li>
                                        <li class="menu-item"><a href="project-display.html"><i class="fa fa-link"></i> Technology</a></li> -->
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="news.html">News</a></li>
                                <li class="menu-item"><a href="<?php echo base_url('welcome/faqs') ?>">Faqs</a></li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav><!-- /#main-nav -->
                      
                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </div><!-- /#site-header -->
        </header>