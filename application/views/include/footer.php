<footer>
         <section id="footer-top">
            <div class="container">
              <div class="row">
                 <div class="col-sm-3">
                     <h3>Newsletter</h3>
                     <p>Join us in our mission! Subscribe to our weekly email campaigns.</p>
                     <form id="form-1" method="post" data-id="57" data-name="Funlin Sigup Form">
                        <input type="email" name="EMAIL" placeholder="Your email address" >
                        <input type="submit" value="Sign up">
                     </form>
                 </div>
                 <div class="col-sm-3">
                     <h3>Get Started</h3>
                     <ul>
                         <li><a href='#'>News</a></li>
                         <li><a href='<?php echo base_url('project/projects') ?>'>Explore</a></li>
                         <li><a href='<?php echo base_url('home/faqs') ?>'>FAQs</a></li>
                         <li><a href='<?php echo base_url('home/about') ?>'>About</a></li>
                         <li><a href='#'>Shopping Cart</a></li>
                      </ul>
                 </div>
                 <?php
                  if(!empty($_SESSION['user'])){
                   ?>
                 <div class="col-sm-3">
                     <h3>Dashboard</h3>
                     <ul>
                         <li><a href='<?php echo base_url('dashboard'); ?>'>Dashboard</a></li>
                         <!-- <li><a href='#'>Login</a></li> -->
                         <li><a href='<?php echo base_url('dashboard/profile/').$_SESSION['user']['id']?>'>Edit Profile</a></li>
                         <li><a href='<?php echo base_url('new-project')?>'>Start a Project</a></li>
                         <li><a href='#'>Contact </a></li>
                      </ul>
                 </div>
                 <?php
               }
                 ?>
                 <div class="col-sm-3">
                     <h3>Explore</h3>
                     <ul>
                         <li><a href='<?php echo base_url('project/category/Education')?>'>Education</a></li>
                         <li><a href='<?php echo base_url('project/category/Film & Video')?>'>Film & Video</a></li>
                         <li><a href='<?php echo base_url('project/category/Food')?>'>Food</a></li>
                         <li><a href='<?php echo base_url('project/category/Games')?>'>Games</a></li>
                         <li><a href='<?php echo base_url('project/category/Technology')?>'>Technology</a></li>
                      </ul>
                 </div>
              </div>
           </div>
         </section>
         <section id="footer-bottom">
            <div class="container">
              <div class="row">
                 <div class="col-sm-6"><p>© <?php $year = date("Y"); echo $year; ?> by Backabiz.  All rights reserved.<span> &nbsp;<a href='<?php echo base_url('home/terms')?>' style="color:#f2f2f2;"> Terms</a>
                 &nbsp;<span><a href='<?php echo base_url('home/privacy')?>' style="color:#f2f2f2;"> Privacy</a>&nbsp;<span><a href='<?php echo base_url('home/legal')?>' style="color:#f2f2f2;"> Legal</a></div>
                   <!-- <div class="col-sm-2"><p> Terms.</div> -->
                 <!-- <p>Terms.</p> -->
                 <div class="col-sm-6">
                     <ul class="bottom-menu-left">
                         <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                         <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                         <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                         <li><a href='#'><i class="fa fa-pinterest"></i></a></li>
                      </ul>
                   </div>
              </div>
           </div>
         </section>

        </footer>
     </div>

       <!-- jquery/js -->
    <script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.min.js"></script>
      <!-- jquery.flexslider.js -->
    <script src="<?php echo base_url(); ?>assets/frontend/assets/js/flexslider-min.js"></script>
     <script type="text/javascript" charset="utf-8">
         $(window).load(function () {
             $('.topnews').flexslider({
                 animation: "fade",
                 controlNav: false,
                 directionNav:false,
                 animationLoop: true,
                 slideshow: true,
                 slideshowSpeed: 5000,
                 animationSpeed: 600,
             });
              $('.studyfactitem').flexslider({
                 animation: "slide",
                 controlNav: true,
                 animationLoop: false,
                 slideshow: true,
                 slideshowSpeed: 3000,
                 animationSpeed: 600,
                 itemWidth: 330,
                 itemMargin: 30,
                 move: 1
             });
             $('#main-slider').flexslider({
                 animation: "fade",
                 controlNav: true
             });
         });
      </script>



      <!-- bootstrap js -->
		<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/assets/js/main.js"></script>

     </body>
     </html>
