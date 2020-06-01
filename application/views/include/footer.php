<footer>
         <section id="footer-top">
            <div class="container">
              <div class="row">
                 <div class="col-sm-3">

                     <h3>Newsletter</h3>
                     <p>Join us in our mission to back SME’s worldwide. Subscribe to our weekly email newsletter.</p>
                     <form id="form-1" method="POST" action="<?php echo base_url('home/subscribe')?>" data-id="57" data-name="Funlin Sigup Form">
                        <input type="email" id="SUB_EMAIL" name="SUB_EMAIL" placeholder="Your email address" required>
                        <input type="submit" value="Sign up">
                     </form>
                 </div>
                 <div class="col-sm-3">
                     <h3>Get Started</h3>
                     <ul>
                         <li><a href='<?php echo base_url('about') ?>'>About</a></li>
                         <li><a href='<?php echo base_url('how-backabiz-works') ?>'>How Backabiz Works</a></li>
                         <li><a href='<?php echo base_url('FAQs') ?>'>FAQ</a></li>
                      </ul>
                 </div>

                 <div class="col-sm-3">
                     <h3>Explore</h3>
                     <ul>
                       <?php
                       $i=0;
      if (isset($category)) {
       foreach ($category as $key=>$value) {

        ?>
        <?php
  $url = str_replace(' ','-',$value['cat_name']);
  $url = str_replace(":",'',$url);
  $url = str_replace("'",'',$url);
  // $url = str_replace("%26",'&',$url);
?>
                         <li><a href='<?php echo base_url('All-Campaigns/').$url;?>'><?php echo $value['cat_name']?></a></li><span>
                         <?php
                         $i++;
if($i==9) break;
                        }
                        }
                        ?>
                      </ul>
                 </div>
                 <div class="col-sm-3">
                   <h3 style="color:#2e3c4b"><br></h3>
                     <ul>
                       <?php
                       $i=5;
      if (isset($category)) {
       foreach ($category as $key=>$value) {
         if($key>9){

        ?>
        <?php
  $url = str_replace(' ','-',$value['cat_name']);
  $url = str_replace(":",'',$url);
  $url = str_replace("'",'',$url);
  // $url = str_replace("%26",'&',$url);
?>
        <li><a href='<?php echo base_url('All-Campaigns/').$url;?>'><?php echo $value['cat_name']?></a></li><span>
        <?php
        $i++;
if($i==18) break;
}
       }
       }
       ?>
     </ul>
</div>
              </div>
           </div>
         </section>
         <section id="footer-bottom">
            <div class="container">
              <div class="row">
                 <div class="col-sm-6"><p>© <?php $year = date("Y"); echo $year; ?> by Backabiz.  All rights reserved.<span> &nbsp;<a href='<?php echo base_url('home/terms')?>' style="color:#f2f2f2;"> Terms</a>
                 &nbsp;<span><a href='<?php echo base_url('home/privacy')?>' style="color:#f2f2f2;"> Privacy</a>&nbsp;<span>
                   <!-- <a href='<?php echo base_url('home/legal')?>' style="color:#f2f2f2;"> Legal</a> -->
                 </div>
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
