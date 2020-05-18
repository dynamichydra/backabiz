<main>
            <section id="project-wrapper" class="section-padding graybg">
                <div class="container">
                    <div class="row">
                   		<div class="col-sm-6">
                      <div class="project-image-container mgbot">
                        <div class="project-love">
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                      <!-- test start -->
                        <div class="container-fluid">
                          <div id="product-slider" class="flexslider">
                            <ul class="slides">
                              <?php
                              $cats = explode(",", $project->feature_img);
                              foreach ($cats as $key) {
                              ?>
                                <li><a href="<?php echo base_url('uploads/project/' . $key); ?>" class="popup-link" title=<?php echo $project->title;?>><img src="<?php echo base_url('uploads/project/' . $key); ?>" style="height:400px; width:550px;"></a></li>
                                <?php
                              }
                                ?>
                            </ul>
                        </div>
                        <div id="product-carousel" class="flexslider">
                            <ul class="slides">
                              <?php
                              $cats = explode(",", $project->feature_img);
                              foreach ($cats as $key) {
                              ?>
                                <li><img src="<?php echo base_url('uploads/project/' . $key); ?>"  style="height:100px; width:125px;"></li>
                                <?php
                              }
                                ?>
                            </ul>
                        </div>

                        </div>
                        <!-- test end -->
                        </div>
                   		<!--	<div class="project-image-container mgbot">
	                      		<a href="#">
	                      			<img src="assets/images/project-image2.jpg" alt="project-one" class="img-responsive">
	                      		</a>
	                      		<div class="project-love">
	                      			<a href="#"><i class="fa fa-heart-o"></i></a>
	                      		</div>
	                      	</div>-->
                   		</div>
                   		<div class="col-md-6">
                   			<div class="project-details graybg">
                   				<h2 class="productauthor__title"><a href="#"><?php echo $project->title;?></a></h2>
                   				<div class="author-single-container">
                   					<div class="author-avatar"><a href="#">
                              <?php
                              if($project->uimg && file_exists('uploads/users/'.$project->uimg)){
                                ?>
                                <img src="<?php echo base_url('uploads/users/'.$project->uimg);?>" alt="<?php echo $project->uname;?>"> </a>
                                <?php
                              }else{
                                ?>
                                <img src="<?php echo base_url('assets/frontend/assets/images/profile-image.jpg');?>" alt="<?php echo $project->uname;?>"> </a>
                                <?php
                              }
                              ?>
                            </div>
                   					<div class="author-single-details">
                   						<p class="author-byline">by <a href="<?php echo base_url('profile/'.$project->user_id);?>"><?php echo $project->uname;?></a></p>
                   						<p style="font-size: 13px;"><?php echo $pcount[0]['tot']?> Campaigns Created<span>|</span><?php echo $project->address;?>	</p>
                   					</div>
                   					<div class="clearfix"></div>
                   				</div>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div style="width:<?php echo ($project->rec_amount/$project->funding_goal)*100;?>%"></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent"><?php echo number_format(($project->rec_amount/$project->funding_goal)*100,2)?>%</div>
	                      		<div class="progression-studios-fund-raised">$<?php echo number_format($project->rec_amount);?></div>
	                      		<div class="progression-studios-funding-goal">raised of $<?php echo number_format($project->funding_goal);?> goal</div>
	                      		<div class="progression-studios-index-time-remaining">
	                      			<ul>
                                <?php
                                $cat = explode(',',$project->category);
                                foreach($cat as $v){
                                  ?>
                                  <li><i class="fa fa-folder-open"></i> <a href="<?php echo base_url('project/category/').$v?>"><?php echo $v;?></a></li>
                                  <?php
                                }
                                ?>
	                      				<li><i class="fa fa-user"></i> <?php echo count($backers);?> Backers</li>
                                <?php
                                $date1=date_create($project->end_date);
                                $data=date("Y/m/d");
                                $date2=date_create($data);
                                $diff=date_diff($date1,$date2);
                                $result=$diff->format("%a");
                                ?>
	                      				<li><i class="fa fa-clock-o"></i> <?php echo $result;?> Days to go</li>
	                      			</ul>
	                      		</div>
	                      		<ul class="spcl-campaign">
                              <li>
      	                      		<form method="post" class="cart" id="project-display"> $ <input type="number" step="any" min="0" placeholder="100" name="donate_amount_field" class="input-text amount wpneo_donate_amount_field text" value="100" data-min-price="50" data-max-price="45000">
                      					   <button type="submit" class="submit">Back Campaign</button>
                  						    </form>
                              </li>
                              <li>
                                  <ul id="blog-single-social-sharing">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                  </ul>
                              </li>
	                      		</ul>
	                      	</div>
	                      </div>
                   	</div>
                </div>
            </section>
            <section id="project-wrapper-bot" class="section-padding" style="padding-top: 40px;">
                <div class="container">
                <div class="row">
                   		<div class="col-md-12" id="project-view">

                   			<ul class="nav nav-tabs">
        							    <li class="nav-item active">
        							      <a class="nav-link" data-toggle="tab" href="#project-tab1">Project Story</a>
        							    </li>
        							    <li class="nav-item">
        							      <a class="nav-link" data-toggle="tab" href="#project-tab2">Updates</a>
        							    </li>
        							    <li class="nav-item">
        							      <a class="nav-link" data-toggle="tab" href="#project-tab3">Backer List</a>
        							    </li>
        							  </ul>
							         <div class="tab-content">
							    <div id="project-tab1" class="row tab-pane active"><br>
							     		<div class="col-md-8">
							     			<div class="project-text-area">
							     				<?php echo $project->description;?>
							     			</div>
							     		</div>
							     		<div class="col-md-4">
							     			<div class="story-right">
							     				<h2>Rewards</h2>
							     				<h3> <span><?php echo number_format($project->reward_p_amount);?></span> or more </h3>
							     				<p><?php echo $project->reward_desc;?>
							     				<h4><?php echo ucfirst($project->del_month);?>, <?php echo $project->del_year;?></h4>
							     				<p>Estimated Delivery</p>
					                      		<ul>
					                      			<li><i class="fa fa-user"></i> 1 backers</li>
					                      			<li><i class="fa fa-certificate"></i> 9 rewards left</li>
					                      		</ul>
								                <button type="submit" class="submit">Select Reward</button>
							     			</div>
							     		</div>
							    </div>
							    <div id="project-tab2" class="row tab-pane fade"><br>
							    	<div class="col-md-12">
							    		<ul class="update-list">
                        <?php if(isset($updates)){
                          foreach($updates as $key=>$value){?>
											<li>
												<span class="round-circle"></span>
                        <?php $datetime = explode(" ",$value['date']);
                        $date = $datetime[0]; ?>
												<h4><?php echo $date?></h4>
												<p class="update-title"><?php echo $value['update_title']?></p>
												<p><?php echo $value['update_details']?></p>
											</li>
											<?php
                    }
                    }
                    ?>
										</ul>
							    	</div>
							    </div>
							    <div id="project-tab3" class="row tab-pane fade"><br>
							      <div id="baker_list" class=" col-md-12" style="display: block;">
                      <div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<th>Name</th>
													<th>Donate Amount</th>
													<th>Date</th>
												</tr>
                        <?php
                        foreach($backers as $k=>$v){
                          ?>
                          <tr>
                            <td><?php echo $v->name;?></td>
                            <td> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php number_format($v->amount);?></span>
                            </td>
                            <td><?php echo date('M d, Y',strtotime($v->date));?></td>
                          </tr>
                          <?php
                        }
                        ?>
											</tbody>
										</table>
                  </div>
									</div>
							    </div>
							         </div>

                   		</div>
                   	</div>
                </div>
            </section>
          <!--related-project-sec start  -->
            <section id="project-sec" class="section-padding inner-page-bg" >
                <div class="container">
                   <div class="row">
                   		<div class="col-sm-12">
	                        <h2 class="main-heading">Related Projects</h2>
	                        <p class="sub-heading">Discover projects just for you and get great recommendations when you select your interests.</p>
                     	</div>

                      <?php
                     if (isset($similar_projects)) {
                       foreach ($similar_projects as $key=>$value) {

                        ?>
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="<?php echo base_url('project/'.$value['p_id']);?>">
                              <?php $cats = explode(",", $value['feature_img']);?>
	                      			<img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" style="width:360px; height:250px;" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="<?php echo base_url('project/category/').$value['category']?>"><?php echo $value['category']?></a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
                            <?php
                      if( !empty($value['user_img'])){
                        ?>
                           <div class="author-avatar"><a href="#"> <img src="<?php echo base_url('uploads/users/' . $value['user_img']); ?>" alt="Avatar"> </a></div>
                            <?php
                          }else{
                            ?>
                            <div class="author-avatar"><a href="#"> <img src="<?php echo base_url()?>/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
                            <?php
                  }
                  ?>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#"><?php echo $value['first_name'];?>  <?php echo $value['last_name'];?></a></p>
	                      		<h2 class="productauthor__title"><a href="<?php echo base_url('project/'.$value['p_id']);?>"><?php echo $value['title']?></a></h2>
	                      		<div class="raised-bar">
	                      			<div class="neo-progressbar"><div style="width:<?php echo ($value['rec_amount']/$value['funding_goal'])*100;?>%"></div></div>
	                      		</div>
	                      		<div class="progression-studios-raised-percent"><?php echo number_format(($value['rec_amount']/$value['funding_goal'])*100,2)?>%</div>
	                      		<div class="progression-studios-fund-raised">$<?php echo number_format($value['rec_amount']);?></div>
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

                </div>
              </div>
            </section>
        </main>
     </div>
       <!-- jquery/js -->

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript">
      $(document).ready(function($) {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

    }
  });
});
    </script>
    <script>
    $(function ($) {
      $('.popup-link').magnificPopup({
          type: 'image',
          gallery:{enabled:true}
        });
        $('#product-carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 120,
             maxItems: 4,
              itemMargin: 10,
            asNavFor: '#product-slider'
        });
        $('#product-slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
             directionNav: false,
            sync: "#product-carousel"
        });
    });
</script>
