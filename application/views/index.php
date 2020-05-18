<!-- body content start -->
          <main>
          	<section>
          		<div class="flexslider cate-box-banner" id="main-slider">
                <!-- add slide new-->
                <!-- <section id="explore-project-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                          <div class="flip-box" style="background-color: rgba(255,219,18,0.9);">
                            <div>
                              <a href="#" class="color1bg"><img src="<?php echo base_url(); ?>assets/images/new/ico1.svg"><h3 class="flip-box-heading">Education</h3></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="flip-box" style="background-color: rgba(220,56,255,0.9);">
                            <div>
                              <a href="#" class="color2bg"><img src="<?php echo base_url(); ?>assets/images/new/ico2.svg"><h3 class="flip-box-heading">Design</h3></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="flip-box" style="background-color: rgba(120,78,255,0.9);">
                            <div>
                              <a href="#" class="color3bg"><img src="<?php echo base_url(); ?>assets/images/new/ico3.svg"><h3 class="flip-box-heading">Film & Video</h3></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="flip-box" style="background-color: rgba(74,233,247,0.9);">
                            <div>
                              <a href="#" class="color4bg"><img src="<?php echo base_url(); ?>assets/images/new/ico4.svg"><h3 class="flip-box-heading">Food</h3></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="flip-box" style="background-color: rgba(82,249,98,0.9);">
                            <div>
                              <a href="#" class="color5bg"><img src="<?php echo base_url(); ?>assets/images/new/ico5.svg"><h3 class="flip-box-heading">Games</h3></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="flip-box" style="background-color: rgba(255,140,56,0.9);">
                            <div>
                              <a href="#" class="color6bg"><img src="<?php echo base_url(); ?>assets/images/new/ico6.svg"><h3 class="flip-box-heading">Technology</h3></a>
                            </div>
                          </div>
                        </div>

                   </div>
                </div>
             </section> -->
                <!-- add slide new end-->
				    <ul class="slides">


              <?php
               if (isset($banner)) {
                 foreach ($banner as $key) {
                $img=explode(",",$key['image']);
                foreach ($img as $vn) {
                  ?>

                <li style="background-image:url(<?php echo base_url('uploads/banner/'.$vn);?>); no-repeat center center; background-size: cover;">
                  <div class="banner-content-wrap">


                      <div class="banner-content">

                        <div class="banner-text">
                          <!-- <h3><span><?php echo $key['title_one'];?></span></h3> -->
                          <h2><span><?php echo $key['title_one'];?></span></h2>
                          <p><span><?php echo $key['title_two'];?></span></p>
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

             <!--Projects We Love start -->
            <section id="explore-project" class="section-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <?php
                      if(isset($title) && count($title)>0){
                      ?>
                      <h2 class="main-heading"><?php echo $title[0]['t_1'];?></h2>
                      <p class="sub-heading"><?php echo $title[0]['des_1'];?></p><br>
                      <?php
                    }
                     ?>
                    </div>
                    <!-- spcl-tab style -->
                    <div class="row">
                      <div class="col-md-12" id="project-view">
                        <ul class="nav nav-pills new-nav-pills">
                          <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#spcl-project-tab1">Food & Beverage</a></li>
                          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spcl-project-tab2">Retail</a></li>
                          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spcl-project-tab3">Health & Wellness</a></li>
                          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spcl-project-tab4">Photography</a></li>
                          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spcl-project-tab5">Trades</a></li>
                          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spcl-project-tab6">Consumer Goods</a></li>
                        </ul>
                        <div class="tab-content new-tab-content">


                            <div id="spcl-project-tab1" class="row tab-pane active"><br>
                              <div class="col-md-4">
                                  <div class="spcl-story-right">
                                    <img src="<?php echo base_url(); ?>assets/images/new/ico1a.svg">
                                    <h2><a href="<?php echo base_url('project/category/Food & Beverage')?>">Food & Beverage</a></h2>
                                    <?php
                                    foreach ($total_projects as $key=>$vn) {
                                      if($vn['category']=="Food & Beverage"){
                                        ?>
                                    <h3><?php echo $vn['total'];?> Popular Campaigns</h3>
                                    <?php
                                  }
                                }
                                  ?>
                                  <?php
                                  foreach ($cat_desc as $key=>$vn) {
                                    if($vn['cat_name']=="Food & Beverage"){
                                      ?>
                                    <p><?php echo $vn['cat_description']?></p>
                                    <?php
                                  }
                                }
                                  ?>
                                    <a type="submit" class="submit color1 yellow" href="<?php echo base_url('project/projects') ?>"><center>SEE MORE CAMPAIGNS</center></a>
                                  </div>
                              </div>

                              <?php
                              foreach ($f_projects as $key=>$vn) {
                                if($vn['category']=="Food & Beverage" && $vn['featured']=="yes"){
                              ?>
                              <div class="col-md-8">
                                <div id="tab-project-wrapper">
                                  <div class="row">
                                    <div class="col-sm-6">
                                  <div class="project-details">
                                    <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title']?></a></h2>
                                    <div class="text"><?php echo $vn['short_description']?></div><br>
                                    <div class="progression-studios-raised-percent">raised of $<?php echo number_format($vn['funding_goal']);?> <span>goal</span></div>
                                      <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?> <span>raised</span></div>
                                      <div class="raised-bar">
                                        <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                                      </div>

                                      <div class="progression-studios-index-time-remaining">
                                        <ul>
                                          <li>
                                            <div class="author-single-container">
                                                <div class="author-avatar">
                                                  <?php
                                                  if( !empty($vn['user_img'])){
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"></a></div>
                                                  <?php
                                                }else{
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                                                  <?php
                                        }
                                        ?>
                                                <div class="author-single-details">
                                                  <p class="author-byline"><a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
                                                  <p style="font-size: 13px;"><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?> </p>
                                                </div>
                                      <div class="clearfix"></div>
                                    </div></li>
                                          <li><div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>% <span>Funded</span></div></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="project-image-container">
                                        <a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
                                          <?php $cats = explode(",", $vn['feature_img']);?>
                                          <img src="<?php echo base_url('uploads/project/' . $cats['0']); ?>" alt="project-one" class="img-responsive">
                                        </a>
                                      </div>
                                  </div>

                                  </div>
                                </div>

                              </div>
                              <?php
                            }
                          }
                          ?>


                            </div>


                            <div id="spcl-project-tab2" class="row tab-pane fade"><br>
                             <div class="col-md-4">
                                  <div class="spcl-story-right">
                                    <img src="<?php echo base_url(); ?>assets/images/new/ico2a.svg">
                                    <h2><a href="<?php echo base_url('project/category/Retail')?>">Retail</a></h2>
                                    <?php
                                    foreach ($total_projects as $key=>$vn) {
                                      if($vn['category']=="Retail"){
                                        ?>
                                    <h3><?php echo $vn['total'];?> Popular Campaigns</h3>
                                    <?php
                                  }
                                }
                                  ?>
                                  <?php
                                  foreach ($cat_desc as $key=>$vn) {
                                    if($vn['cat_name']=="Retail"){
                                      ?>
                                    <p><?php echo $vn['cat_description']?></p>
                                    <?php
                                  }
                                }
                                  ?>
                                    <a type="submit" class="submit color2 yellow" href="<?php echo base_url('project/projects') ?>"><center>SEE MORE CAMPAIGNS</center></a>
                                  </div>
                              </div>


                              <?php
                              foreach ($f_projects as $key=>$vn) {
                                if($vn['category']=="Retail" && $vn['featured']=="yes"){
                              ?>
                              <div class="col-md-8">
                                <div id="tab-project-wrapper">
                                  <div class="row">
                                    <div class="col-sm-6">
                                  <div class="project-details">
                                    <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title']?></a></h2>
                                    <div class="text"><?php echo $vn['short_description']?></div><br>
                                    <div class="progression-studios-raised-percent">raised of $<?php echo number_format($vn['funding_goal']);?> <span>goal</span></div>
                                      <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?> <span>raised</span></div>
                                      <div class="raised-bar">
                                        <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                                      </div>

                                      <div class="progression-studios-index-time-remaining">
                                        <ul>
                                          <li>
                                            <div class="author-single-container">
                                                <div class="author-avatar">
                                                  <?php
                                                  if( !empty($vn['user_img'])){
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"></a></div>
                                                  <?php
                                                }else{
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                                                  <?php
                                        }
                                        ?>
                                                <div class="author-single-details">
                                                  <p class="author-byline"><a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
                                                  <p style="font-size: 13px;"><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?> </p>
                                                </div>
                                      <div class="clearfix"></div>
                                    </div></li>
                                          <li><div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>% <span>Funded</span></div></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="project-image-container">
                                        <a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
                                          <?php $cats = explode(",", $vn['feature_img']);?>
                                          <img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" alt="project-one" class="img-responsive">
                                        </a>
                                      </div>
                                  </div>

                                  </div>
                                </div>

                              </div>
                              <?php
                            }
                          }
                          ?>
                            </div>
                            <div id="spcl-project-tab3" class="row tab-pane fade"><br>
                              <div class="col-md-4">
                                  <div class="spcl-story-right">
                                  <img src="<?php echo base_url(); ?>assets/images/new/ico3a.svg">
                                    <h2><a href="<?php echo base_url('project/category/Health & Wellness')?>">Health & Wellness</a></h2>
                                    <?php
                                    foreach ($total_projects as $key=>$vn) {
                                      if($vn['category']=="Health & Wellness"){
                                        ?>
                                    <h3><?php echo $vn['total'];?> Popular Campaigns</h3>
                                    <?php
                                  }
                                }
                                  ?>
                                  <?php
                                  foreach ($cat_desc as $key=>$vn) {
                                    if($vn['cat_name']=="Health & Wellness"){
                                      ?>
                                    <p><?php echo $vn['cat_description']?></p>
                                    <?php
                                  }
                                }
                                  ?>
                                    <a type="submit" class="submit color3 yellow" href="<?php echo base_url('project/projects') ?>"><center>SEE MORE CAMPAIGNS</center></a>
                                  </div>
                              </div>


                              <?php
                              foreach ($f_projects as $key=>$vn) {
                                if($vn['category']=="Health & Wellness" && $vn['featured']=="yes"){
                              ?>
                              <div class="col-md-8">
                                <div id="tab-project-wrapper">
                                  <div class="row">
                                    <div class="col-sm-6">
                                  <div class="project-details">
                                    <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title']?></a></h2>
                                    <div class="text"><?php echo $vn['short_description']?></div><br>
                                    <div class="progression-studios-raised-percent">raised of $<?php echo number_format($vn['funding_goal']);?> <span>goal</span></div>
                                      <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?> <span>raised</span></div>
                                      <div class="raised-bar">
                                        <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                                      </div>

                                      <div class="progression-studios-index-time-remaining">
                                        <ul>
                                          <li>
                                            <div class="author-single-container">
                                                <div class="author-avatar">
                                                  <?php
                                                  if( !empty($vn['user_img'])){
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"></a></div>
                                                  <?php
                                                }else{
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                                                  <?php
                                        }
                                        ?>
                                                <div class="author-single-details">
                                                  <p class="author-byline"><a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
                                                  <p style="font-size: 13px;"><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?> </p>
                                                </div>
                                      <div class="clearfix"></div>
                                    </div></li>
                                          <li><div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>% <span>Funded</span></div></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="project-image-container">
                                        <a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
                                          <?php $cats = explode(",", $vn['feature_img']);?>
                                          <img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" alt="project-one" class="img-responsive">
                                        </a>
                                      </div>
                                  </div>

                                  </div>
                                </div>

                              </div>
                              <?php
                            }
                          }
                          ?>
                            </div>
                          <div id="spcl-project-tab4" class="row tab-pane fade"><br>
                            <div class="col-md-4">
                                  <div class="spcl-story-right">
                                    <img src="<?php echo base_url(); ?>assets/images/new/ico4a.svg">
                                    <h2><a href="<?php echo base_url('project/category/Photography')?>">Photography</a></h2>
                                    <?php
                                    foreach ($total_projects as $key=>$vn) {
                                      if($vn['category']=="Photography"){
                                        ?>
                                    <h3><?php echo $vn['total'];?> Popular Campaigns</h3>
                                    <?php
                                  }
                                }
                                  ?>
                                  <?php
                                  foreach ($cat_desc as $key=>$vn) {
                                    if($vn['cat_name']=="Photography"){
                                      ?>
                                    <p><?php echo $vn['cat_description']?></p>
                                    <?php
                                  }
                                }
                                  ?>
                                    <a type="submit" class="submit color4 yellow" href="<?php echo base_url('project/projects') ?>"><center>SEE MORE CAMPAIGNS</center></a>
                                  </div>
                              </div>


                              <?php
                              foreach ($f_projects as $key=>$vn) {
                                if($vn['category']=="Photography" && $vn['featured']=="yes"){
                              ?>
                              <div class="col-md-8">
                                <div id="tab-project-wrapper">
                                  <div class="row">
                                    <div class="col-sm-6">
                                  <div class="project-details">
                                    <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title']?></a></h2>
                                    <div class="text"><?php echo $vn['short_description']?></div><br>
                                    <div class="progression-studios-raised-percent">raised of $<?php echo number_format($vn['funding_goal']);?> <span>goal</span></div>
                                      <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?> <span>raised</span></div>
                                      <div class="raised-bar">
                                        <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                                      </div>

                                      <div class="progression-studios-index-time-remaining">
                                        <ul>
                                          <li>
                                            <div class="author-single-container">
                                                <div class="author-avatar">
                                                  <?php
                                                  if( !empty($vn['user_img'])){
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"></a></div>
                                                  <?php
                                                }else{
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                                                  <?php
                                        }
                                        ?>
                                                <div class="author-single-details">
                                                  <p class="author-byline"><a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
                                                  <p style="font-size: 13px;"><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?> </p>
                                                </div>
                                      <div class="clearfix"></div>
                                    </div></li>
                                          <li><div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>% <span>Funded</span></div></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="project-image-container">
                                        <a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
                                          <?php $cats = explode(",", $vn['feature_img']);?>
                                          <img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" alt="project-one" class="img-responsive">
                                        </a>
                                      </div>
                                  </div>

                                  </div>
                                </div>

                              </div>
                              <?php
                            }
                          }
                          ?>
                            </div>
                          <div id="spcl-project-tab5" class="row tab-pane fade"><br>
                              <div class="col-md-4">
                                  <div class="spcl-story-right">
                                    <img src="<?php echo base_url(); ?>assets/images/new/ico5a.svg">
                                    <h2><a href="<?php echo base_url('project/category/Trades')?>">Trades</a></h2>
                                    <?php
                                    foreach ($total_projects as $key=>$vn) {
                                      if($vn['category']=="Trades"){
                                        ?>
                                    <h3><?php echo $vn['total'];?> Popular Campaigns</h3>
                                    <?php
                                  }
                                }
                                  ?>
                                  <?php
                                  foreach ($cat_desc as $key=>$vn) {
                                    if($vn['cat_name']=="Trades"){
                                      ?>
                                    <p><?php echo $vn['cat_description']?></p>
                                    <?php
                                  }
                                }
                                  ?>
                                    <a type="submit" class="submit color5 yellow" href="<?php echo base_url('project/projects') ?>"><center>SEE MORE CAMPAIGNS</center></a>
                                  </div>
                              </div>


                              <?php
                              foreach ($f_projects as $key=>$vn) {
                                if($vn['category']=="Games" && $vn['featured']=="yes"){
                              ?>
                              <div class="col-md-8">
                                <div id="tab-project-wrapper">
                                  <div class="row">
                                    <div class="col-sm-6">
                                  <div class="project-details">
                                    <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title']?></a></h2>
                                    <div class="text"><?php echo $vn['short_description']?></div><br>
                                    <div class="progression-studios-raised-percent">raised of $<?php echo number_format($vn['funding_goal']);?> <span>goal</span></div>
                                      <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?> <span>raised</span></div>
                                      <div class="raised-bar">
                                        <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                                      </div>

                                      <div class="progression-studios-index-time-remaining">
                                        <ul>
                                          <li>
                                            <div class="author-single-container">
                                                <div class="author-avatar">
                                                  <?php
                                                  if( !empty($vn['user_img'])){
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"></a></div>
                                                  <?php
                                                }else{
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                                                  <?php
                                        }
                                        ?>
                                                <div class="author-single-details">
                                                  <p class="author-byline"><a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
                                                  <p style="font-size: 13px;"><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?> </p>
                                                </div>
                                      <div class="clearfix"></div>
                                    </div></li>
                                          <li><div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>% <span>Funded</span></div></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="project-image-container">
                                        <a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
                                          <?php $cats = explode(",", $vn['feature_img']);?>
                                          <img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" alt="project-one" class="img-responsive">
                                        </a>
                                      </div>
                                  </div>

                                  </div>
                                </div>

                              </div>
                              <?php
                            }
                          }
                          ?>
                            </div>
                          <div id="spcl-project-tab6" class="row tab-pane fade"><br>
                            <div class="col-md-4">
                                  <div class="spcl-story-right">
                                    <img src="<?php echo base_url(); ?>assets/images/new/ico6a.svg">
                                    <h2><a href="<?php echo base_url('project/category/Consumer Goods')?>">Consumer Goods</a></h2>
                                    <?php
                                    foreach ($total_projects as $key=>$vn) {
                                      if($vn['category']=="Consumer Goods"){
                                        ?>
                                    <h3><?php echo $vn['total'];?> Popular Campaigns</h3>
                                    <?php
                                  }
                                }
                                  ?>
                                  <?php
                                  foreach ($cat_desc as $key=>$vn) {
                                    if($vn['cat_name']=="Consumer Goods"){
                                      ?>
                                    <p><?php echo $vn['cat_description']?></p>
                                    <?php
                                  }
                                }
                                  ?>
                                    <a type="submit" class="submit color6 yellow" href="<?php echo base_url('project/projects') ?>"><center>SEE MORE CAMPAIGNS</center></a>
                                  </div>
                              </div>


                              <?php
                              foreach ($f_projects as $key=>$vn) {
                                if($vn['category']=="Consumer Goods" && $vn['featured']=="yes"){
                              ?>
                              <div class="col-md-8">
                                <div id="tab-project-wrapper">
                                  <div class="row">
                                    <div class="col-sm-6">
                                  <div class="project-details">
                                    <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title']?></a></h2>
                                    <div class="text"><?php echo $vn['short_description']?></div><br>
                                    <div class="progression-studios-raised-percent">raised of $<?php echo number_format($vn['funding_goal']);?> <span>goal</span></div>
                                      <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?> <span>raised</span></div>
                                      <div class="raised-bar">
                                        <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                                      </div>

                                      <div class="progression-studios-index-time-remaining">
                                        <ul>
                                          <li>
                                            <div class="author-single-container">
                                                <div class="author-avatar">
                                                  <?php
                                                  if( !empty($vn['user_img'])){
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"></a></div>
                                                  <?php
                                                }else{
                                                  ?>
                                                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                                                  <?php
                                        }
                                        ?>
                                                <div class="author-single-details">
                                                  <p class="author-byline"><a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
                                                  <p style="font-size: 13px;"><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?> </p>
                                                </div>
                                      <div class="clearfix"></div>
                                    </div></li>
                                          <li><div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>% <span>Funded</span></div></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="project-image-container">
                                        <a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
                                          <?php $cats = explode(",", $vn['feature_img']);?>
                                          <img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" alt="project-one" class="img-responsive">
                                        </a>
                                      </div>
                                  </div>

                                  </div>
                                </div>

                              </div>
                              <?php
                            }
                          }
                          ?>
                            </div>
                        </div>


                      </div>
                    </div>
                    <!-- spcl- tab style end -->
                  </div>
                </div>
            </section>

          	  <!--project-sec start  ---->
            <section id="project-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                   		<div class="col-sm-12">
                        <?php
                        if(isset($title) && count($title)>0){
                        ?>
	                        <h2 class="main-heading"><?php echo $title[0]['t_2'];?></h2>
	                        <p class="sub-heading"><?php echo $title[0]['des_2'];?></p><br>
                          <?php
                        }
                          ?>
                     	</div>
                      <?php
                     if (isset($project)) {
                     	 foreach ($project as $key=>$value) {

                        ?>
                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="<?php echo base_url('project/'.$value['id']);?>">
                              <?php $cats = explode(",", $value['feature_img']);?>
	                      			<img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" style="width:360px; height:250px;" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="<?php echo base_url('project/category/').$value['category']?>"><?php echo $value['category']?></a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
	                      		<!-- <div class="author-avatar"><a href="#"> <img src="<?php echo base_url(); ?>assets/frontend/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
                           -->
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
	                      		<h2 class="productauthor__title"><a href="<?php echo base_url('project/'.$value['id']);?>"><?php echo $value['title']?></a></h2>
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
                      ?><!--project-item end -->

                      <div class="col-sm-12 text-center"><a href="<?php echo base_url('project/projects') ?>" class="yellow">SEE MORE CAMPAIGNS <i class="fa fa-arrow-circle-o-down"></i></a></div>
                  </div>
              </div>
            </section>
          	  <!--project-counter-sec start --
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
                      		<h2><?php echo $feature[0]['title'];?></h2>
                      		<p><?php echo $feature[0]['subtitle'];?></p>
                      		<ul>
                      			<li><?php echo $feature[0]['p_1'];?></li>
                      			<li><?php echo $feature[0]['p_2'];?></li>
                      			<li><?php echo $feature[0]['p_3'];?></li>
                            <li><?php echo $feature[0]['p_4'];?></li>
                            <li><?php echo $feature[0]['p_5'];?></li>
                      		</ul>
                      	</div>
                      </div>
                      <div class="col-sm-6 market-right">
                      	<div class="market-right-bg" style="background: url(<?php echo base_url('uploads/banner/'.$feature[0]['image']);?>); no-repeat;background-position: center center;background-size: cover;" >
                      		<div class="market-right-container">
	                      		<div class="market-right-text">
	                      			<h3><?php echo $feature[0]['title2'];?></h3>
	                      		</div>
                      		</div>
                 		</div>
                      </div>
                  </div>
              </div>
         	 </section>
           <!-- new part add start-->
           <!--project-sec start  -->
            <section id="expires-sec" class="section-padding graybg">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">
                        <?php
                        if(isset($title) && count($title)>0){
                        ?>
                          <h2 class="main-heading"><?php echo $title[0]['t_3'];?></h2>
                          <p class="sub-heading" style="width: 60%;"><?php echo $title[0]['des_3'];?></p><br>
                          <?php
                        }
                          ?>
                      </div>
                      <?php
                     if (isset($ending_project)) {
                     	 foreach ($ending_project as $key=>$value) {

                        ?>
                      <div class="col-sm-4">
                        <div class="project-item">
                          <div class="project-image-container">
                            <a href="<?php echo base_url('project/' . $value['id']); ?>">
                              <?php $cats = explode(",", $value['feature_img']);?>
                              <img src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" style="width:360px; height:250px;" alt="project-one">
                            </a>



                          <?php
                          if( !empty($value['user_img'])){
                          ?>
                          <div class="author-avatar"><a href="#"><img src="<?php echo base_url('uploads/users/' . $value['user_img']); ?>" alt="Avatar"></a></div>
                          <?php
                        }else{
                          ?>
                          <div class="author-avatar"><a href="#"><img src="<?php echo base_url(); ?>assets/images/profile-image.jpg" alt="Avatar"></a></div>
                          <?php
                }
                ?>
                          </div>
                          <div class="project-details">
                            <p class="author-byline"><?php echo $value['end_date'];?></p>
                            <h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $value['id']); ?>"><?php echo $value['title'];?> </a></h2>
                          </div>
                        </div>
                      </div><!--project-item end -->
                      <?php
                    }
                  }
                    ?>
                     <!--project-item end -->
                  </div>
              </div>
            </section>
           <!-- new part add end-->
          	<!--Button Work section start  -->
             <section id="button-work-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">
                         <h2 class="main-heading"><?php echo $title[0]['t_5'];?></h2>
                         <p class="sub-heading"><?php echo $title[0]['des_5'];?></p>
                         <div class="col-sm-4">
                           <p class="green-circle">1</p>
                           <h3><?php if(isset($footer_question[0]['title'])){ echo $footer_question[0]['title'];}?></h3>
                           <p><?php if(isset($footer_question[0]['title'])){ echo $footer_question[0]['description'];}?></p>
                         </div>
                         <div class="col-sm-4">
                           <p class="green-circle">2</p>
                           <h3><?php if(isset($footer_question[1]['title'])){ echo $footer_question[1]['title'];}?> </h3>
                           <p><?php if(isset($footer_question[1]['title'])){ echo $footer_question[1]['description'];}?></p>
                         </div>
                         <div class="col-sm-4">
                           <p class="green-circle">3</p>
                           <h3><?php if(isset($footer_question[2]['title'])){echo $footer_question[2]['title'];}?> </h3>
                           <p><?php if(isset($footer_question[2]['description'])){ echo $footer_question[2]['description'];}?> </p>
                         </div>
                      </div>
                   </div>
                </div>
             </section>
            <!--Your Story section start -->
             <section id="your-story-sec" class="section-padding" style="background: url(<?php echo base_url('uploads/banner/'.$feature[0]['your_story_image']);?>); no-repeat center center;background-size: cover;">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-12">
                        <?php
                        if(isset($title) && count($title)>0){
                        ?>
                         <h2><?php echo $title[0]['footer_b_title'];?></h2>
                         <p><?php echo $title[0]['footer_b_des'];?></p>
                         <a href="<?php echo $title[0]['footer_b_link'];?>"><?php echo $title[0]['footer_b_button'];?></a>
                       <?php } ?>
                      </div>
                   </div>
                </div>
             </section>
          </main>
