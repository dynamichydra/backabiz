<main>
          <!-- Breadcrumbs -->
            <?php $this->load->view('include/small_banner');?>
            <section id="project-sec" class="section-padding">
                <div class="container">
                   <div class="row">
                     <?php
                     if(!empty($project_details)){
                     foreach ($project_details as $key=>$vn) {
                       ?>

                      <div class="col-sm-4">
	                      <div class="project-item">
	                      	<div class="project-image-container">
	                      		<a href="<?php echo base_url('project/' . $vn['p_id']); ?>">
	                      			<img src="<?php echo base_url('uploads/project/' . $vn['feature_img']); ?>" style="width:360px; height:250px;" alt="project-one">
	                      		</a>
	                      		<ul class="project-link">
                                    <li>
                                      <a href="#"><?php echo $vn['category'];?></a>
                                    </li>
                                </ul>
	                      		<!--<a href="#" class="project-link">Film &amp; Video</a>-->
                            <?php
                      if( !empty($vn['user_img'])){
                        ?>
	                      		<div class="author-avatar"><a href="#"> <img src="<?php echo base_url('uploads/users/' . $vn['user_img']); ?>" alt="Avatar"> </a></div>
                            <?php
                          }else{
                            ?>
                            <div class="author-avatar"><a href="#"> <img src="<?php echo base_url()?>/assets/images/profile-image.jpg" alt="Avatar"> </a></div>
                            <?php
                  }
                  ?>
	                      	</div>
	                      	<div class="project-details">
	                      		<p class="author-byline">by <a href="#"><?php echo $vn['first_name'];?>  <?php echo $vn['last_name'];?></a></p>
	                      		<h2 class="productauthor__title"><a href="<?php echo base_url('project/' . $vn['p_id']); ?>"><?php echo $vn['title'];?></a></h2>


                            <div class="raised-bar">
                              <div class="neo-progressbar"><div style="width:<?php echo ($vn['rec_amount']/$vn['funding_goal'])*100;?>%"></div></div>
                            </div>
                            <div class="progression-studios-raised-percent"><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>%</div>
                            <div class="progression-studios-fund-raised">$<?php echo number_format($vn['rec_amount']);?></div>
                            <div class="progression-studios-funding-goal">raised of $<?php echo number_format($vn['funding_goal']);?> goal</div>

                            <?php
                           $date1=date_create($vn['end_date']);
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
                  }else{
                    ?>
                    <h2 class="productauthor__title"><center>No Projects Found in this Category</center></h2>
                    <?php
                  }
                    ?>

                  </div>
                  <!-- <div class="pagination-div">
                   <ul class="pagination">
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">Next</a></li>
                    </ul>
                </div> -->
              </div>
            </section>
        </main>
