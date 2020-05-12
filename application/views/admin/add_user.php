<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>add user</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>New User Form</h2>
     <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" action="<?php echo base_url('admin/insert_user')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="f_name">First Name</label>
              <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Enter First name">
            </div>
            <div class="form-group">
              <label for="l_name">Last Name</label>
              <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Enter Last name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="phone">Mobile Number</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone no.">
            </div>
            <div class="form-group">
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
            </div>
            <div class="form-group">
            <label for="pic">Profile Photo</label>
            <input type="file" id="pic" name="pic" multiple>
            <p class="help-block">Upload a profile pic</p>
            </div>
            <h6><b>Address</b></h6>
            <hr>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Street Address</div>
                <input class="form-control" type="text" name="address" placeholder="Street Address">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Address Line 2</div>
                <input class="form-control" name="address2" type="text">
              </div>
            </div>
            <div class="form-group">
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

            <div class="form-group">
              <label for="about">About Us</label>
              <input type="text" class="form-control" name="about" id="about" placeholder="about us">
            </div>
            <div class="form-group">
              <label for="bio">Bio</label>
              <input type="text" class="form-control" name="bio" id="bio" placeholder="bio">
            </div>
            <div class="form-group">
              <label for="fax">Fax</label>
              <input type="text" class="form-control" name="fax" id="fax" placeholder="fax">
            </div>
            <div class="form-group">
              <label for="web">Website</label>
              <input type="text" class="form-control" name="web" id="web" placeholder="website">
            </div>
            </div>
            <h6><b>Social Profile Links</b></h6>
            <hr>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Facebook</div>
                <input class="form-control" type="text" name="fb_link" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Twitter</div>
                <input class="form-control" type="text" name="tw_link" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Pinterest</div>
                <input class="form-control" type="text" name="pt_link" >
              </div>
            </div>

            <button type="submit"  class="btn white m-b">Submit</button>
          </form>
        </div>


      </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("psw").value;
        var confirmPassword = document.getElementById("c_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
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

</body>
</html>
