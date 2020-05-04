 <main>
        
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
                                          <li class="menu-item"><a href="password.html">Password</a></li>
                                          <li class="menu-item"><a href="rewards.html">Rewards</a></li>
                                          <li class="menu-item"><a href="<?php echo base_url();?>home/logout">Logout</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu-item menu-item-has-children">
                                      <a href="#">Projects <i class="fa fa-angle-down"></i></a>
                                      <ul class="sub-menu">
                                         <li class="menu-item"><a href="campaign.html">My Projects</a></li>
                                         <li class="menu-item"><a href="backed_campaigns.html">My Invested Projects</a></li>
                                         <li class="menu-item"><a href="pledges_received.html">Pledges Received</a></li>
                                         <li class="menu-item"><a href="bookmark.html">Bookmarks</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </nav><!-- /#main-nav -->
                    </div>
                    <div class="dashboard-right"><a href="start-a-project.html" class="submit">Add New Project</a></div>
                   </div>
                  </div>
                </div>

                <div class="row">
                	<div class="project-form-content">
                		<form type="post" action="">
                		<div class="col-md-6">
                			<div class="all-form">
                				<h3 class="reward-option">Profile Picture</h3>
                        <?php
              if( !empty($user[0]['img'])){
                ?>
                				<img class="profile-form-img" src="<?php echo base_url() . 'uploads/users/' . $user[0]['img']; ?>" alt="Profile Image">
                        <?php
                  }else{
                    ?>
                    <img class="profile-form-img" src="<?php echo base_url()?>assets/images/user.png" alt="Profile Image">
                    <?php
          }
          ?>
                			</div>
                		</div>
               
                		<div class="col-md-6">
                			<div class="all-form">
	                       		<h3 class="reward-option">Basic Info</h3>
	                       		<div class="form-group">
									<label style="display: block;">Name:</label>
									<label><?php echo $user[0]['first_name']." ". $user[0]['last_name']?></label>
								</div>
								<div class="form-group">
									<label>First Name:</label>
								    <input type="text" name="first_name" value="<?php echo $user[0]['first_name']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Last Name:</label>
								    <input type="text" name="last_name" value="<?php echo $user[0]['last_name']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>About Us:</label>
								    <textarea name="profile_about" rows="3" disabled="" class="form-control"><?php echo $user[0]['about']?></textarea>
								</div>
								<div class="form-group"><?php echo $user[0]['first_name']?>
								    <label>User Bio:</label>
								    <textarea name="profile_portfolio" rows="3" disabled="" class="form-control"><?php echo $user[0]['bio']?></textarea>
								</div>
							</div>
                		</div>

                		<div class="col-md-6">
                			<div class="all-form">
	                       		<h3 class="reward-option">Contact Info</h3>
	                       		<div class="form-group">
								    <label>Mobile Number:</label>
								    <input type="text" name="profile_mobile1" value="<?php echo $user[0]['phone']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Email:</label>
								    <input type="email" name="profile_email1" value="<?php echo $user[0]['email']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Fax:</label>
								    <input type="text" name="profile_fax" value="<?php echo $user[0]['fax']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Website:</label>
								    <input type="text" name="profile_website" value="<?php echo $user[0]['website']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Address:</label>
								    <input type="text" name="profile_address" value="<?php echo $user[0]['address'].",".$user[0]['address2']?>" class="form-control">
								</div>
							</div>
						</div>

                		<div class="col-md-6">
                			<div class="all-form">
	                       		<h3 class="reward-option">Social Profile</h3>
	                       		<div class="form-group">
								    <label>Facebook:</label>
								    <input type="text" name="profile_facebook" value="<?php echo $user[0]['facebook']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Twitter:</label>
								    <input type="text" name="profile_twitter" value="<?php echo $user[0]['twitter']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>VK:</label>
								    <input type="text" name="profile_vk" value="" class="form-control">
								</div>
								<div class="form-group">
								    <label>Linkedin:</label>
								    <input type="text" name="profile_linkedin" value="http://linkedin.com" class="form-control">
								</div>
								<div class="form-group">
								    <label>Pinterest:</label>
								    <input type="text" name="profile_pinterest" value="<?php echo $user[0]['pinterest']?>" class="form-control">
								</div>
							</div>   
                		</div>    

                		<div class="col-md-12">
                			<button class="submit">Edit</button>
                		</div>
                	</form>
                	</div>
                </div>

              </div>
            </section>
        </main>