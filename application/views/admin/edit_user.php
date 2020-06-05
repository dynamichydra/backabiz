<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Users</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Update User Form</h2>
                    <?php
                    foreach ($user_data as $key=>$vn) {
                        ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" action="<?php echo base_url('admin/update_user')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="f_name">First Name</label>
              <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Enter name" value="<?php echo $vn['first_name'];?>">
              <input type="hidden" class="form-control" name="id" id="id" placeholder="Enter name" value="<?php echo $vn['id'];?>">
            </div>
            <div class="form-group">
              <label for="l_name">Last Name</label>
              <input type="text" class="form-control" value="<?php echo $vn['last_name'];?>" name="l_name" id="l_name" placeholder="Enter Last name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" value="<?php echo $vn['email'];?>" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <!-- <div class="form-group">
              <label for="phone">Mobile Number</label>
              <input type="text" class="form-control" value="<?php echo $vn['phone'];?>" name="phone" id="phone" placeholder="Enter phone no.">
            </div> -->

            <label>Mobile Number</label>
            <div class="form-group">
              <div class="input-group">
                <!-- <div class="input-group-btn"> -->
            <select name="country_code" style="width:80px;height:35px;margin-top: 0px;" required>
              <?php
                            foreach ($countries as $key=>$value) {?>
                              <option value="<?php echo $value['phonecode']; ?>" <?php  if($vn["country_code"] == $value['phonecode']){ echo 'selected';} elseif('61'==$value['phonecode']){ echo 'selected'; } ?>>
+<?php echo $value['phonecode']; ?>
</option><?php
                            }
                            ?>
            </select>
          <!-- </div> -->
            <input type="text" name="phone" value="<?php echo $vn['phone'];?>" class="form-control" id="phone" placeholder="Enter phone no.">
          </div>
        </div>
            <!-- <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="psw" id="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password">
              <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
            </div>
            <div class="form-group">
              <label for="c_password">Confirm Password</label>
              <input type="password" class="form-control" name="c_password" id="c_password" onfocusout="Validate()" placeholder="Password">
            </div> -->
            <!-- <div class="form-group">
            <label for="pic">Profile Photo</label>
            <input type="file" id="pic" name="pic" multiple>
            <p class="help-block">Upload a profile pic</p>
            </div> -->
            <h6><b>Address</b></h6>
            <hr>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Street Address</div>
                <input class="form-control" type="text" value="<?php echo $vn['address'];?>" name="address" placeholder="Street Address">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Address Line 2</div>
                <input class="form-control" value="<?php echo $vn['address2'];?>" name="address2" type="text">
              </div>
            </div>
            <!-- <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Country</div>
                <select name="country" id="country" class="form-control c-select" onchange= "get_state(this.value)" required>
                  <option value="">Select Country</option>
                  <?php
                                foreach ($countries as $key=>$city) {
                                    echo "<option value='" . $city['id'] . "'>" . $city['country_name'] . "</option>";
                                }
                                ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">State</div>
                <select name="state" class="form-control c-select" id="state" onchange= "get_city(this.value)" required>
                  <option>Select country first</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">City</div>
                <select name="city" class="form-control c-select" id="city" required>
                  <option>Select state first</option>
                </select>
              </div>
            </div>
 -->
            <div class="form-group">
              <label for="about">About Us</label>
              <input type="text" class="form-control" value="<?php echo $vn['about'];?>" name="about" id="about" placeholder="about us">
            </div>
            <div class="form-group">
                <label>Company Registration Number:</label>
                <input type="text"  name="company_reg_no" value="<?php echo $vn['company_reg_no'];?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="bio">Bio</label>
              <input type="text" class="form-control" value="<?php echo $vn['bio'];?>" name="bio" id="bio" placeholder="bio">
            </div>
            <!-- <div class="form-group">
              <label for="fax">Fax</label>
              <input type="text" class="form-control" value="<?php echo $vn['fax'];?>" name="fax" id="fax" placeholder="fax">
            </div> -->
            <div class="form-group">
              <label for="web">Website</label>
              <input type="text" class="form-control" value="<?php echo $vn['website'];?>" name="web" id="web" placeholder="website">
            </div>
            </div>
            <h6><b>Social Profile Links</b></h6>
            <hr>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Facebook</div>
                <input class="form-control" value="<?php echo $vn['facebook'];?>" type="text" name="fb_link" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Twitter</div>
                <input class="form-control" value="<?php echo $vn['twitter'];?>" type="text" name="tw_link" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Instagram</div>
                <input class="form-control" value="<?php echo $vn['instagram'];?>" type="text" name="pt_link" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Reddit</div>
                <input class="form-control" value="<?php echo $vn['reddit'];?>" type="text" name="profile_vk" >
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div> -->
            <!-- <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile" class="form-control">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div> -->
            <button type="submit"  class="btn white m-b">Update</button>
          </form>
          <?php

                    }
                    ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

</body>
</html>
