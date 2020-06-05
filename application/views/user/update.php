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
                          <form type="post" method="POST" action="<?php echo base_url('dashboard/p_update/').$project[0]['id']?>">
                            <div class="form-group row">
                          <!-- <div class="col-md-6">
                            <label>Date:</label>
                            <input type="date" name="form-date" placeholder="" value="" class="form-control">
                          </div> -->
                          <div class="col-md-12">
                            <label>Update Title:</label>
                            <input type="text" name="update_title" placeholder="Update Title" value="" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Update Details:</label>
                          <textarea cols="20" rows="2" placeholder="Update Details" name="project_update_details" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="+ Add Update" class="submit" name="save_update">
                        </div>
                      </form>

                        <?php
                        if (isset($updates)) {
                        foreach ($updates as $key=>$vn) {
                          ?>
                                                  <hr>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <label>Date:</label>
                            <?php $datetime = explode(" ",$vn['date']);
                            $date = $datetime[0]; ?>
                            <input type="date" name="form-date" placeholder="" value="<?php echo $date?>" class="form-control" readonly>
                          </div>
                          <div class="col-md-6">
                            <label>Update Title:</label>
                            <input type="text" name="form-date" placeholder="Update Title" value="<?php echo $vn['update_title']?>" class="form-control">
                          </div>
                        </div>
                        <div class="form-group clearfix">
                          <label>Update Details:</label>
                          <textarea cols="20" rows="2" placeholder="Update Details" name="prject_update_details" class="form-control"><?php echo $vn['update_details']?></textarea>
                           <a href="<?php echo base_url('dashboard/remove_update/').$vn['id']?>" type="button" onclick="return confirm('Are you sure?');" value="Remove" class="cancel" name="save_update" style="margin-top: 30px; float: right;">Remove</a>
                        </div>
                                                <hr>
                        <?php
                      }
                      }
                      ?>


                        <!-- <div class="form-group">
                          <input type="button" value="+ Add Update" class="submit" name="save_update">
                        </div> -->


                			</div>
                      <!-- <div class="form-group">
                          <input type="button" value="Save" class="submit" name="save_update">
                        </div> -->
                  </div>
                </div>

              </div>
            </section>
        </main>
