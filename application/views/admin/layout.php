 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>backabiz</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/material-design-icons/material-design-icons.css" type="text/css" />

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/passwordStyle.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">
    <?php $this->load->view('admin/include/sidebar'); ?>




<!-- ############ LAYOUT START-->
 <!-- content -->
  <div id="content" class="app-content box-shadow-z1" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->

            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <!-- navbar collapse -->
            <div class="collapse navbar-collapse" id="collapse">
              <!-- link and dropdown -->
              <ul class="nav navbar-nav mr-auto">
                <li class="nav-item dropdown">
                 <?php echo $page_title;?>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>

              <div ui-include="'../views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->

            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="<?php echo base_url()?>/assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                   <ul class="dropdown-menu">
      <li><a href="<?php echo base_url();?>admin/logout">Logout</a></li>
    </ul>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>

    <div ui-view class="app-body" id="view">



    <?php $this->load->view('admin/'.$layout_page); ?>











        </div>
        <div class="app-footer">
          <div class="p-2 text-xs">
            <div class="pull-right text-muted py-1">
              &copy; Copyright <strong>backabiz</strong>
              <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
            </div>

          </div>
        </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="<?php echo base_url(); ?>/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>/libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="<?php echo base_url(); ?>/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="<?php echo base_url(); ?>/libs/jquery/underscore/underscore-min.js"></script>
  <script src="<?php echo base_url(); ?>/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="<?php echo base_url(); ?>/libs/jquery/PACE/pace.min.js"></script>

  <script src="<?php echo base_url(); ?>scripts/config.lazyload.js"></script>

  <script src="<?php echo base_url(); ?>scripts/palette.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-load.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-jp.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-include.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-device.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-form.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-nav.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-screenfull.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-scroll-to.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ui-toggle-class.js"></script>

  <script src="<?php echo base_url(); ?>scripts/app.js"></script>

  <!-- ajax -->
  <script src="<?php echo base_url(); ?>/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="<?php echo base_url(); ?>scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
