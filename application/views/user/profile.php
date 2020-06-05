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
                	<div class="project-form-content">
                		<form method="POST" action="<?php echo base_url('dashboard/update_user')?>" enctype="multipart/form-data">
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
          <input type="file" id="user_image" class="btn btn-outline rounded b-success text-success" name="user_image">
          <p class="help-block">Upload a profile pic</p>
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
								    <input type="text" name="f_name" value="<?php echo $user[0]['first_name']?>" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $user[0]['id']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Last Name:</label>
								    <input type="text" name="l_name" value="<?php echo $user[0]['last_name']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>About Us:</label>
								    <textarea  name="about" rows="3"  class="form-control"><?php echo $user[0]['about']?></textarea>
								</div>
								<div class="form-group">
								    <label>User Bio:</label>
								    <textarea  name="bio" rows="3"  class="form-control"><?php echo $user[0]['bio']?></textarea>
								</div>
							</div>
                		</div>

                		<div class="col-md-6">
                			<div class="all-form">
	                       		<h3 class="reward-option">Contact Info</h3>

                            <div class="form-group">
            								    <label>Company Registration Number:</label>
            								    <input type="text"  name="company_reg_no" value="<?php echo $user[0]['company_reg_no']?>" class="form-control">
            								</div>

								    <label>Mobile Number:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-btn">
                    <select name="country_code" style="width:80px;height:10px;margin-top: 0px;color: inherit;background-color:#f7f7f9" required>
                                      <?php
                                                    foreach ($countries as $key=>$value) {?>
                                                      <option value="<?php echo $value['phonecode']; ?>" <?php  if($user[0]["country_code"] == $value['phonecode']){ echo 'selected';} elseif('61'==$value['phonecode']){ echo 'selected'; } ?>>
                    +<?php echo $value['phonecode']; ?>
                    </option><?php
                                                    }
                                                    ?>
                    </select>
                  </div>
                    <input type="text" name="phone" value="<?php echo $user[0]['phone']?>" class="form-control">
                  </div>
								</div>
                <!-- <div class="form-group">
  <select style="width:80px;height:20px;">
    <option selected="selected">Please select</option>
    <option>1</option>
  </select>
  <input type='text' name='test' style="width: 387px;height:17px;border-color: rgba(120, 130, 140, 0.3);" value='' />
</div> -->
								<div class="form-group">
								    <label>Email:</label>
								    <input type="email"  name="email" value="<?php echo $user[0]['email']?>" class="form-control">
								</div>
								<!-- <div class="form-group">
								    <label>Fax:</label>
								    <input type="text"  name="fax" value="<?php echo $user[0]['fax']?>" class="form-control">
								</div> -->
								<div class="form-group">
								    <label>Website:</label>
								    <input type="text"  name="web" value="<?php echo $user[0]['website']?>" class="form-control">
								</div>
                <div class="form-group">
                  <label for="country">Country</label>
                    <select style="background-color:#f7f7f9" name="country" id="country" class="form-control c-select" onchange= "get_state(this.value)" required>
                      <option value="">Select Country</option>
                      <?php
                                    foreach ($countries as $key=>$value) {?>
                                      <option value="<?php echo $value['id']; ?>" <?php  if($user[0]["country"] == $value['id'])  echo 'selected'; ?>>
    <?php echo $value['country_name']; ?>
    </option><?php
                                    }
                                    ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="country">State</label>
                    <select name="state" class="form-control c-select" id="state" onchange= "get_city(this.value)" required>
                      <option>Select country first</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="country">City</label>
                    <select name="city" class="form-control c-select" id="city" required>
                      <option>Select state first</option>
                    </select>
                </div> -->

								<div class="form-group">
								    <label>Address:</label>
								    <input type="text" name="address" value="<?php echo $user[0]['address']?>" class="form-control">
								</div>
                <div class="form-group">
								    <label>Address Line 2:</label>
								    <input type="text" name="address2" value="<?php echo $user[0]['address2']?>" class="form-control">
								</div>
							</div>
						</div>

                		<div class="col-md-6">
                			<div class="all-form">
	                       		<h3 class="reward-option">Social Profile</h3>
	                       		<div class="form-group">
								    <label>Facebook:</label>
								    <input type="text" name="fb_link" value="<?php echo $user[0]['facebook']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Twitter:</label>
								    <input type="text" name="tw_link" value="<?php echo $user[0]['twitter']?>" class="form-control">
								</div>
								<div class="form-group">
								    <label>Reddit:</label>
								    <input type="text" name="profile_vk" value="<?php echo $user[0]['reddit']?>" class="form-control">
								</div>
								<!-- <div class="form-group">
								    <label>Reddit:</label>
								    <input type="text" name="profile_linkedin" value="<?php echo $user[0]['linkedin']?>"  class="form-control">
								</div> -->
								<div class="form-group">
								    <label>Instagram:</label>
								    <input type="text" name="pt_link" value="<?php echo $user[0]['instagram']?>" class="form-control">
								</div>
							</div>
                		</div>

                		<div class="col-md-12">
                			<button class="submit">SAVE</button>
                		</div>
                	</form>
                	</div>
                </div>

              </div>

            </section>
        </main>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
          function get_state(id)
        {
            $.ajax({
                url:"<?php echo base_url('admin/get_state_by_country_id') ?>",
                method:"POST",
                data:{"country_id":id},
                success:function(response)
                {
                    //console.log(response);
                    var json=JSON.parse(response);
                    if(json.status=="success")
                    {
                        var data=json.data;
                        var optionfield='';
                        optionfield+='<option value="" selected disabled>-----Select state-----</option>';
                        for(i=0;i<data.length;i++)
                        {
                            <?php if(isset($user) && $user!=""){?>
                                var district=<?php echo $user->district ?>;
                                if(data[i].slno==district)
                                {
                                    optionfield+='<option value="'+data[i].id+'" selected>'+data[i].name+'</option>';
                                }else{
                                    optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                                }
                            <?php }else{ ?>
                            optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                            <?php } ?>
                        }
                        $("#state").html(optionfield);

                    }else{
        //                alert(json.data);
        //                return false;
                    }
                }
            });
        }

        function get_city(id)
        {
            $.ajax({
                url:"<?php echo base_url('admin/get_city_by_state_id') ?>",
                method:"POST",
                data:{"state_id":id},
                success:function(response)
                {
                    //console.log(response);
                    var json=JSON.parse(response);
                    if(json.status=="success")
                    {
                        var data=json.data;
                        var optionfield='';
                        optionfield+='<option value="" selected disabled>-----Select city-----</option>';
                        for(i=0;i<data.length;i++)
                        {
                            <?php if(isset($user) && $user!=""){?>
                                var district=<?php echo $user->district ?>;
                                if(data[i].slno==district)
                                {
                                    optionfield+='<option value="'+data[i].id+'" selected>'+data[i].name+'</option>';
                                }else{
                                    optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                                }
                            <?php }else{ ?>
                            optionfield+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                            <?php } ?>
                        }
                        $("#city").html(optionfield);

                    }else{
        //                alert(json.data);
        //                return false;
                    }
                }
            });
        }
        </script>
