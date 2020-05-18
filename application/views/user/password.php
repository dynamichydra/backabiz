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
                    <div class="dashboard-right"><a href="<?php echo base_url('new-project')?>" class="submit">Add New Campaign</a></div>
                   </div>
                  </div>
                </div>
                <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
                <?php } ?>
                <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
                <?php } ?>
                <div class="row">
                	<div class="col-md-12">
                    <form method="post" action="<?php echo base_url('dashboard/update_password')?>">
                			<div class="all-form p17" style="max-width: 100%;">
                          <div class="form-group">
                              <label>Current Password: </label>
                              <input type="password" name="password" value="" class="form-control">
                              <input type="hidden" name="id" value="<?php echo $user[0]['id']?>" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>New Password: </label>
                              <!-- <input type="password" name="new-password" value="" class="form-control"> -->
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
                              <label>Retype Password: </label>
                              <input type="password" class="form-control" name="c_password" id="c_password" onfocusout="Validate()" placeholder="Password">
                          </div>
                			</div>
                      <button id="password-save" class="blue" type="submit">Save</button>
                    </form>
                  </div>
                </div>

              </div>
            </section>
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
        </main>
