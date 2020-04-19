 <!-- body content start -->
 <style type="text/css">
 	/*.slides li{background: #FED857 url("images/slide-3.jpg") no-repeat center center; background-size: cover;}*/
 </style>
          <main>
          	<section>
          		<div class="flexslider" id="main-slider">
				    <ul class="slides">

                    <?php
                     if (isset($banner)) {
                     	 foreach ($banner as $key) { 
                      $img=explode(",",$key['image']);
                      // print_r($img);
                      // die;
                      foreach ($img as $vn) { 
                        ?>
                    	<li>
		                    <div class="banner-content-wrap" style="background-image:url("<?php echo base_url('uploads/banner/'.$vn);?>"); no-repeat center center; background-size: cover;">


		                    	<!-- <img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image2.jpg"> -->
		                        <div class="banner-content">

		                        	<div class="banner-text">
		                        		<h3><span><?php echo $key['title_one'];?></span></h3>
		                        		<h2><span><?php echo $key['title_two'];?></span></h2>
		                        		<a href="<?php echo $key['button_link'];?>" class=""><?php echo $key['button_title'];?></a>
		                        	</div>
		                        </div><!--end banner-content -->
		                    </div>
                    	 </li>
                    	 <?php
                    	}
                    }
                    }
                    ?>
                    	<!--  <li>
		                     <div class="banner-content-wrap">
		                        <div class="banner-content">
		                        	<div class="banner-text">
		                        		<h2><span>Reach More.<br> Raise More.<br> Do More.</span></h2>
		                        		<p>Raising money has never been so easy. <br>We are here to help your cause starting today!</p>
		                        		<a href="#" class="">Explore Projects</a>
		                        	</div>
		                        </div><!--end banner-content -->
		                    </div>
                    	 </li> -->
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
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="#">
	                      			<i class="fa fa-graduation-cap"></i>
	                      			<h3 class="flip-box-heading">Education</h3>   
	                      		</a>
	                      	</div>
                      	</div>
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="#">
	                      			<i class="fa fa-puzzle-piece"></i>
	                      			<h3 class="flip-box-heading">Design</h3>
	                      		</a>
	                      	</div>
                      	</div>
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="#">
	                      			<i class="fa fa-film"></i>
	                      			<h3 class="flip-box-heading">Film & Video</h3>
	                      		</a>
	                      	</div>
                      	</div>
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="#">
	                      			<i class="fa fa-coffee"></i>
	                      			<h3 class="flip-box-heading">Food</h3>
	                      		</a>
	                      	</div>
                      	</div>
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="#">
	                      			<i class="fa fa-gamepad"></i>
	                      			<h3 class="flip-box-heading">Games</h3>
	                      		</a>
	                      	</div>
                      	</div>   
                      	<div class="col-sm-2">
	                      	<div class="flip-box">
	                      		<a href="#">
	                      			<i class="fa fa-link"></i>
	                      			<h3 class="flip-box-heading">Technology</h3>
	                      		</a>
	                      	</div>
                      	</div>
                      
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
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image2.jpg" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#">design</a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#">Sonoma County â€“ A Short Film in Wine Country</a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $52,000</div>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i>438 Days to go</div>
	                      	</div>
	                      </div>   
                      </div><!--project-item end -->
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image3.jpg" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#">design</a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#">Sonoma County â€“ A Short Film in Wine Country</a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $52,000</div>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i>438 Days to go</div>
	                      	</div>
	                      </div>   
                      </div><!--project-item end -->
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image.jpg" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#">design</a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#">Sonoma County â€“ A Short Film in Wine Country</a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $52,000</div>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i>438 Days to go</div>
	                      	</div>
	                      </div>   
                      </div><!--project-item end -->
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image2.jpg" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>   
                                      <a href="#">food</a>
                                    </li>
                                    <li>
                                      <a href="#">tech</a>
                                    </li>
                                </ul>   
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#">Sonoma County â€“ A Short Film in Wine Country</a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $52,000</div>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i>438 Days to go</div>
	                      	</div>
	                      </div>   
                      </div><!--project-item end -->
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image3.jpg" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#">food</a>
                                    </li>
                                    <li>
                                      <a href="#">tech</a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#">Sonoma County â€“ A Short Film in Wine Country</a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $52,000</div>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i>438 Days to go</div>
	                      	</div>
	                      </div>   
                      </div><!--project-item end -->
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="#">
	                      			<img src="<?php echo base_url(); ?>assets/frontend/assets/images/project-image.jpg" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#">food</a>
                                    </li>
                                    <li>
                                      <a href="#">tech</a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#">Jane Smith</a></p>
	                      		<h2 class="productauthor__title"><a href="#">Sonoma County â€“ A Short Film in Wine Country</a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent">86.54%</div>
	                      		<div class="progression-studios-fund-raised">$45,000</div>
	                      		<div class="progression-studios-funding-goal">raised of $52,000</div>
	                      		<div class="progression-studios-index-time-remaining"> <i class="fa fa-clock-o"></i>438 Days to go</div>
	                      	</div>
	                      </div>   
                      </div><!--project-item end -->
                      <div class="col-sm-12 text-center"><a href="#" class="yellow">MORE PROJECTS <i class="fa fa-arrow-circle-o-down"></i></a></div>
                  </div>
              </div>
            </section>
          	  <!--project-counter-sec start -->
             <section id="project-counter-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-3">   
                         <h2>84k</h2>
                         <p>Projects are Completed</p>
                      </div>
                      <div class="col-sm-3">   
                         <h2>22k</h2>
                         <p>Ideas Raised Funds</p>
                      </div>
                      <div class="col-sm-3">   
                         <h2>17k</h2>
                         <p>Categories Served</p>
                      </div>
                      <div class="col-sm-3">   
                         <h2>88k</h2>
                         <p>Happy Customers</p>
                      </div>
                   </div>
                </div>
             </section>
          	<!--market-sec start -->
             <section id="market-sec">
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-sm-6"> 
                      	<div class="market-left">
                      		<h2>We Help at Every Step from Concept to Market</h2>
                      		<p>Discover projects just for you and get great recommendations when you select your interests.</p>
                      		<ul>
                      			<li>Raise funds with a crowdfunding campaign</li>
                      			<li>Extend your campaign with InDemand</li>
                      			<li>Fast track to the global market</li>
                      		</ul>
                      	</div>
                      </div>
                      <div class="col-sm-6 market-right"> 
                      	<div class="market-right-bg">
                      		<div class="market-right-container">
	                      		<div class="market-right-text">
	                      			<h3>All the Right Experts to Help<br> Your Business</h3>
	                      		</div>
                      		</div>                      	
                 		</div>
                      </div>
                  </div>
              </div>
         	 </section>
          	<!--Testimonial section start  -->
             <section id="testimonial-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">   
                         <h2 class="main-heading">Our Testimonials</h2>
                         <p class="sub-heading">Discover projects just for you and get great recommendations when you select your interests.</p>
                      </div>
                      <div class="col-sm-4">  
                      	<div class="testmonial-item">
                      		<p class="author-desc">"There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. It has survived not only five centuries"</p>
                      		<img src="<?php echo base_url(); ?>assets/frontend/assets/images/testimonial-author.png" alt="testimonial-author-image">
                      		<h3 class="author-name">Jane Smith</h3>
                      		<p class="author-post">Creator/Seller</p>
                      	</div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="testmonial-item">
                      		<p class="author-desc">"There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. It has survived not only five centuries"</p>
                      		<img src="<?php echo base_url(); ?>assets/frontend/assets/images/testimonial-author.png" alt="testimonial-author-image">
                      		<h3 class="author-name">Jane Smith</h3>
                      		<p class="author-post">Creator/Seller</p>
                      	</div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="testmonial-item">
                      		<p class="author-desc">"There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. It has survived not only five centuries"</p>
                      		<img src="<?php echo base_url(); ?>assets/frontend/assets/images/testimonial-author.png" alt="testimonial-author-image">
                      		<h3 class="author-name">Jane Smith</h3>
                      		<p class="author-post">Creator/Seller</p>
                      	</div>
                      </div>
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
