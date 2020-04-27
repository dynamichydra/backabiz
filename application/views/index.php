
          <main>
          	<section>
          		<div class="flexslider" id="main-slider">
				    <ul class="slides">

                    <?php
                     if (isset($banner)) {
                     	 foreach ($banner as $key) {
                      $img=explode(",",$key['image']);
                      foreach ($img as $vn) {
                        ?>

                    	<li>
		                    <div class="banner-content-wrap" style="background-image:url(<?php echo base_url('uploads/banner/'.$vn);?>); no-repeat center center; background-size: cover;">


		                        <div class="banner-content">

		                        	<div class="banner-text">
		                        		<h3><span><?php echo $key['title_one'];?></span></h3>
		                        		<h2><span><?php echo $key['title_two'];?></span></h2>
		                        		<a href="<?php echo $key['button_link'];?>" class=""><?php echo $key['button_title'];?></a>
		                        	</div>
		                        </div>
		                    </div>
                    	 </li>
                    	 <?php
                    	}
                    }
                    }
                    ?>
		                    </div>
                    	 </li>
				    </ul>
				</div>
          	</section>
          	  <!--project-counter-sec start -->
            <section id="explore-project" class="section-padding">
                <div class="container">
                	<div class="row">
                		<div class="col-sm-12">
	                    <h2 class="main-heading">Browse by Categories</h2>
	                    <p class="sub-heading">Discover projects just for you and get great recommendations when you select your interests.</p>
                     	</div>
                	</div>
                </div>
            </section>
            <section id="explore-project-item">
                <div class="container">
                   	<div class="row">
                   		 <?php
                     if (isset($category)) {
                     	 foreach ($category as $key=>$value) {

                        ?>
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="<?php echo base_url('category/'.$value['cat_name']);?>">
	                      			<i class="<?php echo $value['icon_name']?>"></i>
	                      			<h3 class="flip-box-heading"><?php echo $value['cat_name']?></h3>
	                      		</a>
	                      	</div>
                      	</div>
                      	<?php
                      		}
                      	}
                      	?>
                   </div>
                </div>
             </section>
          	  <!--project-sec start  -->
            <section id="project-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                   		<div class="col-sm-12">
	                        <h2 class="main-heading">Explore Our Projects</h2>
	                        <p class="sub-heading">Discover projects just for you and get great recommendations when you select your interests.</p>
                     	</div>
                     	<?php
                     if (isset($project)) {
                     	 foreach ($project as $key=>$value) {

                        ?>
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url() . 'uploads/project/' . $value['feature_img']; ?>" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#"><?php echo $value['category']?></a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#"><?php echo $value['title']?></a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $<?php echo $value['funding_goal']?></div>
	                      		 <?php
	                      		$date1=date_create($value['end_date']);
								$data=date("Y/m/d");
								$date2=date_create($data);
								$diff=date_diff($date1,$date2);
								$result=$diff->format("%a");
	                      		?>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i><?php echo $result; ?> Days to go</div>
	                      	</div>
	                      </div>
                      </div><!--project-item end -->
                      <?php
                  }
              }
                      ?>
                      <div class="col-sm-12 text-center"><a href="#" class="yellow">MORE PROJECTS <i class="fa fa-arrow-circle-o-down"></i></a></div>
                  </div>
              </div>
            </section>
          	  <!--project-counter-sec start -->
              <?php
              if(isset($home_number) && count($home_number)>0){
              ?>
             <section id="project-counter-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                      <?php echo $home_number[0]['page_content'];?>
                   </div>
                </div>
             </section>
             <?php
            }
             ?>
          	<!--market-sec start -->
            <?php
            if(isset($home_market) && count($home_market)>0){
            ?>
             <section id="market-sec">
                <div class="container-fluid">
                   <div class="row">
                      <?php echo $home_market[0]['page_content'];?>
                  </div>
              </div>
         	 </section>
           <?php
          }
           ?>
          	<!--Testimonial section start  -->
             <section id="testimonial-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">
                         <h2 class="main-heading">Our Testimonials</h2>
                         <p class="sub-heading">Discover projects just for you and get great recommendations when you select your interests.</p>
                      </div>
                      <?php
                      foreach($testimonial as $k=>$v){
                        ?>
                        <div class="col-sm-4">
                          <div class="testmonial-item">
                            <?php echo $v['page_content'];?>
                          </div>
                        </div>
                        <?php
                      }
                      ?>
                   </div>
                </div>
             </section>
            <!--Your Story section start -->
             <section id="your-story-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">
                         <h2>Your Story Starts Here</h2>
                         <p>Find a cause you believe in and make good things happen</p>
                         <a href="#">START A PROJECT</a>
                      </div>
                   </div>
                </div>
             </section>
          </main>
