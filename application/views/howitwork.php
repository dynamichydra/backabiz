<main>
          <!-- Breadcrumbs -->
            <?php $this->load->view('include/small_banner');?>
          <!-- About Text -->
            <section id="vision-sec" class="section-padding graybg">
              <div class="container">
              	<div class="row">
              		<div class="col-sm-4 new-title-content-wrapper">
              			<h2><?php echo $h_title[0]['t_1'];?></h2>
              			<p><?php echo $h_title[0]['des_1'];?> </p>
              		</div>
              		<div class="col-sm-4 new-title-content-wrapper">
              			<h2><?php echo $h_title[0]['t_2'];?></h2>
              			<p><?php echo $h_title[0]['des_2'];?> </p>
              		</div>
              		<div class="col-sm-4 new-title-content-wrapper">
              			<h2><?php echo $h_title[0]['t_3'];?></h2>
              			<p><?php echo $h_title[0]['des_3'];?> </p>
              		</div>
              	</div>
              </div><!-- end container -->
            </section><!-- end about-img-text -->
            <section id="market-sec">
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-sm-6">
                      	<div class="market-left new-market-left">
                      		<h2><?php echo $h_title[0]['banner_title'];?></h2>
                      		<p><?php echo $h_title[0]['banner_description'];?></p>
                      	</div>
                      </div>
                      <div class="col-sm-6 market-right">
                      	<div class="market-right-bg">

                 		</div>
                      </div>
                  </div>
              </div>
         	 </section>


          <!-- Testimonial Section -->
            <section id="belief-sec" class="section-padding" style="background: url(../assets/images/heart-small.png) no-repeat;background-position: bottom right;">
              <div class="top-testi-bg" style="background: url(../assets/images/heart-large.png) no-repeat; background-size: 220px auto;background-position: 30px 30px;">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">
                         <h2 class="main-heading"><?php echo $h_title[0]['bottom_title'];?></h2>
                         <p class="sub-heading"><?php echo $h_title[0]['bottom_description'];?></p>
                         <div class="joint-pro-txt"><a href="<?php echo $h_title[0]['button_link'];?>" class="site-btn"><?php echo $h_title[0]['bottom_button'];?></a></div>
                      </div>
                   </div>
                </div>
              </div>
            </section>

        </main>
