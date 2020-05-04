  <!-- body content start -->
  <main>
    <?php $this->load->view('include/small_banner');?>
    
      <section class="project-form-wrapper section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dashboard-wrap clearfix">
              <div class="dashboard-top-nav">
                <nav id="dashboard-nav" class="main-nav">
                        <ul class="menu">
                            <li class="menu-item current-menu-item"><a href="dashboard.html">Dashboard</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="profile.html">Profile</a></li>
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
          	<div class="col-md-12">
          		<div class="all-form" style="max-width: 100%;">
          			<div class="dashboard-head clearfix row">
					<div class="dashboard-head-left col-md-5">
						<span>Summary</span>
						<ul>
							<li><a href="#">1W</a></li>
							<li><a href="#">2W</a></li>
							<li><a href="#">1M</a></li>
							<li><a href="#">3M</a></li>
							<li><a href="#">6M</a></li>
							<li><a href="#">1Y</a></li>
						</ul>
					</div><!--dashboard-head-left-->
					<div class="dashboard-head-right col-md-7">
						<form method="get" action="" class="dashboard-head-date">
							<input type="date" id="datepicker" name="date_range_from" value="2020-04-08" placeholder="From"> <span>to</span>
							<input type="date" name="date_range_to" class="datepickers_1 hasDatepicker" value="2020-04-14" placeholder="To" id="dp1586839350322">
							<button type="submit" class="submit" id="search-submit">Search</button>
						</form>
					</div>
					<!--dashboard-head-right-->
				</div>
                     	<div class="clearfix row">
                     		<div class="col-md-12 dashboard-summary">
                     			<ul>
                     				<li class="active">
                     					<span>$0</span>
                     					<p>Fund Raised</p>
                     				</li>
                     				<li>
                     					<span>0</span>
                     					<p>Total Backed</p>
                     				</li>
                     				<li>
                     					<span>0</span>
                     					<p>Pledge Received</p>
                     				</li>
                     			</ul>
                     		</div>
                     		<div class="col-md-12 chart">
                     			<img src="assets/images/new/chart.png" alt="project-chart" class="img-responsive">
                     		</div>
                     	</div>
          		</div>
           	</div>
          </div>
          <div class="row">
          	<div class="project-form-content">
          		<div class="col-md-6">
          			<div class="all-form row">
          				<h3 class="reward-option">Profile Picture</h3>
          				<div class="col-md-2" style="padding: 0;">
          					<img class="profile-form-img img-responsive" src="assets/images/new/client.jpg" alt="Profile Image" style="width: 100%;">
          				</div>
          				<div class="campaign-right dashboard-cam-rgt col-md-10" style="padding-right:0;">
          					<a href="#">Test</a>
            				<ul>
                            <li>8 Days Until Launch</li>
                            <li> by <a href="#">John Doe</a> </li>
                            <li>Total $0</li>
                            <li>Goal $1,000</li>
                          </ul>
                    	</div>
          			</div>
          		</div>
          		<div class="col-md-6">
          			<form type="post" action="">
            			<div class="all-form">
                     		<h3 class="reward-option">My Information</h3>
						<div class="form-group">
							<label>Username:</label>
						    <input type="text" name="first_name" value="<?php echo $user['name']?>" class="form-control">
						</div>
						<div class="form-group">
						    <label>Email:</label>
						    <input type="email" name="email" value="<?php echo $user['email']?>" class="form-control">
						</div>
						<div class="form-group">
							<label>First Name:</label>
					    	<input type="text" name="first_name" value="John" class="form-control">
						</div>
						<div class="form-group">
					    	<label>Last Name:</label>
					    	<input type="text" name="last_name" value="Doe" class="form-control">
						</div>
						<div class="form-group">
					    	<label>Website:</label>
					    	<input type="text" name="Website_name" value="" class="form-control">
						</div>
						<div class="form-group">
						    <label>Bio:</label>
						    <textarea name="profile_portfolio" rows="3" disabled="" class="form-control"></textarea>
						</div>
						<h3 class="reward-option">Payment Info</h3>
						<button class="submit">Edit</button>
						<button class="cancel" style="display: none;">Cancel</button>
						<button class="blue" style="display: none;">Save</button>
					</div
				</form>
          		</div>
          	</div>
          </div>

        </div>
      </section>
  </main>
