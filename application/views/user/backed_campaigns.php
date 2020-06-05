<main>
          <!-- Breadcrumbs -->
          <?php $this->load->view('include/small_banner');?>
            <!-- end breadcrumbs-sec -->

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
                		<div class="col-md-12">
                			<div class="all-form" style="max-width: 100%;">

                        <div id="backed_list" class="table-responsive">
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Rewards</th>
                                <th>Actions</th>
                              </tr>
                              <?php
                              if (isset($backers)) {
                              foreach ($backers as $key=>$vn) {
                                ?>
                              <tr>
                                <td><a href="#">#<?php echo $vn['id']?></a></td>
                                <td><?php echo date('d M, Y',strtotime($vn['date']));?></td>
                                <td><?php echo $vn['status']?></td>
                                <td>$<?php echo $vn['amount']?> for 1 item</td>
                                <td><a href="#">Rewards: $<?php echo $vn['amount']?></a></td>
                                <?php
                          $url = str_replace(' ','-',$vn['project_title']);
                          $url = str_replace(":",'',$url);
                          $url = str_replace("'",'',$url);
                          // $url = str_replace("%26",'&',$url);
                      ?>
                                <td><a href="<?php echo base_url('campaigns/'.$url);?>">View</a></td>
                              </tr>
                              <?php
                            }
                          }
                          ?>

                            </tbody>
                          </table>
                        </div>

                			</div>
                      <!-- <div class="pagination-div">
                   <ul class="pagination">
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">Next</a></li>
                    </ul>
                </div> -->
                  </div>
                </div>

              </div>
            </section>
        </main>
