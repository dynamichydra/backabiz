         <!-- body content start -->
        <main>
          <!-- Breadcrumbs -->
            <section class="breadcrumbs-sec" style="background: url(<?php echo base_url('assets/frontend/assets/images/breadcrumbs-bg.jpg');?>) no-repeat;">
              <div class="container">
                <div class="breadcrumbs-text">
                  <h3>My account</h3>
                  <ul>
                    <li>
                      <a href="index.html">home</a>
                    </li>
                    <li>
                      <span>My account</span>
                    </li>
                  </ul>
                </div>
              </div><!-- end container -->
            </section><!-- end breadcrumbs-sec -->
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
            <?php } ?>
          <!-- Form Section start-->
            <section class="project-form-wrapper section-padding">
              <div class="container">

                <div class="row">
                	<div class="project-form-content">
                		<form type="post" method="post" action="<?php echo base_url('home/login_check')?>">
                  		<div class="col-md-6 col-sm-6">
                        <h3 class="reward-option" style="font-size: 26px; border-bottom: none;margin-top: 0;">Login</h3>
                  			<div class="all-form">
                          <div class="form-group">
                              <label>Username or email address *</label>
                              <input type="text" name="username" value="" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Password *</label>
                              <input type="password" name="password" value="" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" class="submit" name="login" value="Log in">Log in</button>
                              <div style="display: inline-block;margin-left: 30px;"><input class="" name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me</div>
                          </div>
                          <div class="form-group">
                             <a href="#" class="green">Lost your password?</a>
                          </div>
          							</div>
          						</div>
                    </form>

                      <form type="post" method="post" action="<?php echo base_url('home/register')?>">
                      <div class="col-md-6 col-sm-6">
                        <h3 class="reward-option" style="font-size: 26px; border-bottom: none;margin-top: 0;">Register</h3>
                        <div class="all-form">
                          <div class="form-group">
                              <label>Email address *</label>
                              <input type="email" name="email" value="" class="form-control">
                          </div>
                         <p class="p17">A password will be sent to your email address.</p>
                         <p style="font-size: 14px;">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="green" target="_blank">privacy policy</a>.</p>
                         <button type="submit" class="submit" name="register" value="register">Register</button>
                        </div>
                      </div>


                	</form>
                	</div>
                </div>

              </div>
            </section>
        </main>
