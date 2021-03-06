<main>
          <!-- Breadcrumbs -->
            <section class="breadcrumbs-sec" style="background: url(../assets/images/breadcrumbs-bg.jpg) no-repeat;">
              <div class="container">
                <div class="breadcrumbs-text">
                  <h3>about</h3>
                  <ul>
                    <li>
                      <a href="index.html">home</a>
                    </li>
                    <li>
                      <span>about</span>
                    </li>
                  </ul>
                </div>
              </div><!-- end container -->
            </section><!-- end breadcrumbs-sec -->
          <!-- About Text -->
            <section class="about-img-text abt-btm-gap site-gap">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="leftabout-bg" style="background-image:url(<?php echo base_url('uploads/banner/'.$about[0]['image']);?>); no-repeat;background-size: cover;">
                        <div class="l-about-txt">
                          <h2>
                          <?php echo $about[0]['title2'];?>
                          </h2>
                        </div>
                    </div><!-- end leftabout-text -->
                  </div>
                  <div class="col-md-6">
                    <div class="rgt-txt-div">
                      <h2>
                        <?php echo $about[0]['title'];?>
                      </h2>
                      <p class="sub-hdn">
                        <?php echo $about[0]['subtitle'];?>
                      </p>
                      <ul>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about[0]['p_1'];?>
                        </li>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about[0]['p_2'];?>
                        </li>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about[0]['p_3'];?>
                        </li>
                        <!-- <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about[0]['p_4'];?>
                        </li>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about[0]['p_5'];?>
                        </li> -->
                        <?php if (!empty($about[0]["p_4"])) {?>
                        <li>
                          <i class="fa fa-check"></i>
                              <?php echo $about[0]["p_4"];?>
                        </li>
                      <?php  } ?>
                      <?php if (!empty($about[0]["p_5"])) {?>
                        <li>
                          <i class="fa fa-check"></i>
                              <?php echo $about[0]["p_5"];?>
                        </li>
                        <?php  } ?>
                      </ul>
                      <a href="<?php echo base_url('new-project')?>" class="site-btn">Start a Backabiz</a>
                    </div>
                  </div>
                </div><!-- end row -->
              </div><!-- end container -->
            </section><!-- end about-img-text -->
          <!-- Count Section -->
            <!-- <section class="count-sec site-gap" style="background: url(../assets/images/yellow-hands-bg.jpg) no-repeat;background-size: cover;background-position: bottom center;">
              <div class="count-div">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="count-num">
                        <h3>
                          <span>84</span>
                          <span>k</span>
                        </h3>
                        <p>Projects are Completed</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="count-num">
                        <h3>
                          <span>22</span>
                          <span>k</span>
                        </h3>
                        <p>Ideas Raised Funds</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="count-num">
                        <h3>
                          <span>17</span>
                          <span>k</span>
                        </h3>
                        <p>Categories Served</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="count-num">
                        <h3>
                          <span>88</span>
                          <span>k</span>
                        </h3>
                        <p>Happy Customers</p>
                      </div>
                    </div>
                  </div><!-- end row --
                </div><!-- end container --
              </div>
            </section> -->
          <!-- Joint Project Section -->
            <section class="joint-projct-sec" style="background: url(<?php echo base_url('uploads/banner/'.$about_banner[0]['image']);?>) no-repeat;background-size: cover;background-position: center;">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="joint-pro-txt">
                      <h2><?php echo $about_banner[0]['title'] ?></h2>
                      <a href="<?php echo $about_banner[0]['b_link'] ?>" class="site-btn"><?php echo $about_banner[0]['b_title'] ?></a>
                    </div>
                  </div>
                </div>
              </div><!-- end container -->
            </section>
          <!-- Bottom About Section -->
            <section id="btm-abt-sec" class="section-padding bg-light-grey" style="background: url(../assets/images/heart-small.png) no-repeat;background-position: top right;">
              <div class="top-testi-bg bg-light-grey" style="background: url(../assets/images/heart-large.png) no-repeat; background-size: 220px auto;background-position: 30px 30px;">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="rgt-txt-div">
                      <h2>
                        <?php echo $about_bottom[0]['title'];?>
                      </h2>
                      <p class="sub-hdn">
                        <?php echo $about_bottom[0]['subtitle'];?>
                      </p>
                      <p class="sub-hdn">
                        <?php if(!empty($about_bottom[0]['subtitle_1'])) echo $about_bottom[0]['subtitle_1'];?>
                      </p>
                      <ul>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about_bottom[0]['p_1'];?>
                        </li>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about_bottom[0]['p_2'];?>
                        </li>
                        <li>
                          <i class="fa fa-check"></i>
                          <?php echo $about_bottom[0]['p_3'];?>
                        </li>
                        <?php if (!empty($about_bottom[0]["p_4"])) {?>
                        <li>
                          <i class="fa fa-check"></i>
                              <?php echo $about_bottom[0]["p_4"];?>
                        </li>
                      <?php  } ?>
                      <?php if (!empty($about_bottom[0]["p_5"])) {?>
                        <li>
                          <i class="fa fa-check"></i>
                              <?php echo $about_bottom[0]["p_5"];?>
                        </li>
                        <?php  } ?>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="leftabout-bg" style="background-image:url(<?php echo base_url('uploads/banner/'.$about_bottom[0]['image']);?>); no-repeat;background-size: cover;">
                        <div class="l-about-txt r-about-text">
                          <h2>
                          <?php echo $about_bottom[0]['title2'];?>
                          </h2>
                        </div>
                    </div><!-- end leftabout-text -->
                  </div>
                </div><!-- end row -->
              </div><!-- end container -->
            </section>
              </div>
            </section>
          <!-- Funding Team -->

        </main>
