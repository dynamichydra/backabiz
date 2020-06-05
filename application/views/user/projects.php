<main>
          <!-- Breadcrumbs -->
            <?php $this->load->view('include/small_banner');?>

          <!-- Form Section start-->
            <section class="project-form-wrapper section-padding">
              <div class="container">

               <div class="row">
                  <div class="col-md-12">
                    <div class="dashboard-wrap clearfix">
                    <div class="dashboard-top-nav">
                      <nav id="dashboard-nav" class="main-nav">
                              <ul class="menu">
                                  <li class="menu-item current-menu-item"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
                                  <li class="menu-item menu-item-has-children">
                                      <a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                      <ul class="sub-menu">
                                          <li class="menu-item"><a href="<?php echo base_url('dashboard/profile/').$user[0]['id']?>">Profile</a></li>
                                          <li class="menu-item"><a href="profile-contact.html">Contact</a></li>
                                          <li class="menu-item"><a href="<?php echo base_url('dashboard/password/').$user[0]['id']?>">Password</a></li>
                                          <!-- <li class="menu-item"><a href="rewards.html">Rewards</a></li> -->
                                          <li class="menu-item"><a href="<?php echo base_url();?>home/logout">Logout</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu-item menu-item-has-children">
                                      <a href="#">Campaigns <i class="fa fa-angle-down"></i></a>
                                      <ul class="sub-menu">
                                         <li class="menu-item"><a href="<?php echo base_url('dashboard/my_campaigns/').$user[0]['id']?>">My Campaigns</a></li>
                                         <li class="menu-item"><a href="<?php echo base_url('dashboard/backed_campaigns/').$user[0]['id']?>">My Invested Campaigns</a></li>
                                         <!-- <li class="menu-item"><a href="pledges_received.html">Pledges Received</a></li>
                                         <li class="menu-item"><a href="bookmark.html">Bookmarks</a></li> -->
                                      </ul>
                                  </li>
                              </ul>
                          </nav><!-- /#main-nav -->
                    </div>
                    <div class="dashboard-right"><a href="<?php echo base_url('new-campaign')?>" class="submit">Add New Campaign</a></div>
                   </div>
                  </div>
                </div>

                <div class="row">
                		<div class="col-md-12 ">
                			<div class="all-form row" style="max-width: 100%;">

                        <?php
                        foreach ($project_details as $key=>$vn) {
                          ?>
                       <div class="col-md-3 pln">
                         <?php
                         $cats = explode(",", $vn['feature_img']);
                         ?>
                         <img class="profile-form-img img-responsive" style="height:180px; width:250px;" src="<?php echo base_url('uploads/project/' . $cats[0]); ?>" alt="Profile Image">
                       </div>
                        <div class="col-md-9">
                          <div class="campaign-right clearfix">
                            <div class="campaign-tl">
                              <h3><a href="#"><?php echo $vn['title'];?></a></h3>
                              <p><?php echo $vn['location'];?>,<?php echo $vn['country_name'];?></p>
                            </div>
                            <div class="campaign-tr">
                              <a href="<?php echo base_url('dashboard/update/').$vn['project_id']?>" class="submit">Update</a>
                              <?php if($vn['status']=='Pending')
                              {
                                ?>
                              <a href="<?php echo base_url('dashboard/new_project/').$vn['project_id']?>" class="submit">Edit</a>
                              <?php
                            }
                            ?>
                              <span class="draft">Draft</span>
                            </div>
                            <div class="clearfix"></div>
                            <ul>
                              <li><div><?php echo number_format(($vn['rec_amount']/$vn['funding_goal'])*100,2)?>%</div></li>
                              <li><span>$<?php echo number_format($vn['rec_amount']);?></span> Fund Raised</li>
                              <li><span>$<?php echo $vn['funding_goal'];?></span> Funding Goal</li>
                              <?php
                             $date1=date_create($vn['start_date']);
                             $data=date("Y/m/d");
                             $date2=date_create($data);
                             $diff=date_diff($date1,$date2);
                             $result=$diff->format("%a");
                                ?>
                              <li><span><?php echo $result; ?> days</span> Until Launch</li>
                            </ul>
                         </div>
                        </div>
                        <?php
                      }
                          ?>

                			</div>

                  </div>
                </div>

              </div>
            </section>
        </main>
