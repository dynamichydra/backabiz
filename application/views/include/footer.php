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
                 <div class="col-sm-6"><p>© <?php $year = date("Y"); echo $year; ?> by Backabiz.  All rights reserved.</p></div>
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
    <script type="text/javascript">
      function get_states(id)
    {
        $.ajax({
            url:"<?php echo base_url('admin/get_state_by_country_id') ?>",
            method:"POST",
            data:{"country_id":id},
            success:function(response)
            {
                //console.log(response);
                var json=JSON.parse(response);
                if(json.status=="success")
                {
                    var data=json.data;
                    var optionfield='';
                    optionfield+='<option value="" selected disabled>-----Select state-----</option>';
                    for(i=0;i<data.length;i++)
                    {
                        <?php if(isset($user) && $user!=""){?>
                            var district=<?php echo $user->district ?>;
                            if(data[i].slno==district)
                            {
                                optionfield+='<option value="'+data[i].id+'" selected>'+data[i].name+'</option>';
                            }else{
                                optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                            }
                        <?php }else{ ?>
                        optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                        <?php } ?>
                    }
                    $("#state").html(optionfield);

                }else{
    //                alert(json.data);
    //                return false;
                }
            }
        });
    }

    function get_city(id)
    {
        $.ajax({
            url:"<?php echo base_url('admin/get_city_by_state_id') ?>",
            method:"POST",
            data:{"state_id":id},
            success:function(response)
            {
                //console.log(response);
                var json=JSON.parse(response);
                if(json.status=="success")
                {
                    var data=json.data;
                    var optionfield='';
                    optionfield+='<option value="" selected disabled>-----Select city-----</option>';
                    for(i=0;i<data.length;i++)
                    {
                        <?php if(isset($user) && $user!=""){?>
                            var district=<?php echo $user->district ?>;
                            if(data[i].slno==district)
                            {
                                optionfield+='<option value="'+data[i].id+'" selected>'+data[i].name+'</option>';
                            }else{
                                optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                            }
                        <?php }else{ ?>
                        optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                        <?php } ?>
                    }
                    $("#city").html(optionfield);

                }else{
    //                alert(json.data);
    //                return false;
                }
            }
        });
    }
    </script>
     </body>
     </html>
