<main>
          <!-- Breadcrumbs -->
          <?php $this->load->view('include/small_banner');?>
            <!-- end breadcrumbs-sec -->

	        <section id="fundraising-sec" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="fund-cntnt">
								<h2 class="main-heading"><?php echo $why[0]['banner_title']?></h2>
								<?php echo $why[0]['banner_description']?>
								<a href="<?php echo $why[0]['button_link']?>" class="site-btn"><?php echo $why[0]['bottom_button']?></a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="fund-img"><img src="<?php echo base_url() . 'uploads/banner/' . $why[0]['banner_image']; ?>" draggable="false" class="img-responsive"></div>
						</div>
					</div>
				</div>
			</section>



      <section id="idea-sec" class="section-padding graybg">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<h2 class="main-heading">Five reasons to Crowdfund on Backabiz</h2>

							<div class="story-card">
                <div class="row">
                  <div class="col-sm-4 story-card-img">
                    <img src="<?php echo base_url() . 'uploads/banner/' . $why[0]['image_1']; ?>" alt="Swan Lake" class="img-responsive">
                  </div>
                  <div class="col-sm-8 story-content">
                    <h2><?php echo $why[0]['t_1']?></h2>
                    <p><?php echo $why[0]['des_1']?>
                    </p>
                  </div>
                </div>
							</div><br>

              <div class="story-card">
                <div class="row">
                  <div class="col-sm-4 story-card-img">
                    <img src="<?php echo base_url() . 'uploads/banner/' . $why[0]['image_2']; ?>" alt="Swan Lake" class="img-responsive">
                  </div>
                  <div class="col-sm-8 story-content">
                    <h2><?php echo $why[0]['t_2']?></h2>
                    <p><?php echo $why[0]['des_2']?>
                    </p>
                  </div>
                </div>
              </div><br>

              <div class="story-card">
                <div class="row">
                  <div class="col-sm-4 story-card-img">
                    <img src="<?php echo base_url() . 'uploads/banner/' . $why[0]['image_3']; ?>" alt="Swan Lake" class="img-responsive">
                  </div>
                  <div class="col-sm-8 story-content">
                    <h2><?php echo $why[0]['t_3']?></h2>
                    <p><?php echo $why[0]['des_3']?>
                    </p>
                  </div>
                </div>
              </div><br>

              <div class="story-card">
                <div class="row">
                  <div class="col-sm-4 story-card-img">
                    <img src="<?php echo base_url() . 'uploads/banner/' . $why[0]['image_4']; ?>" alt="Swan Lake" class="img-responsive">
                  </div>
                  <div class="col-sm-8 story-content">
                    <h2><?php echo $why[0]['t_4']?></h2>
                    <p><?php echo $why[0]['des_4']?>
                    </p>
                  </div>
                </div>
              </div><br>

              <div class="story-card">
                <div class="row">
                  <div class="col-sm-4 story-card-img">
                    <img src="<?php echo base_url() . 'uploads/banner/' . $why[0]['image_5']; ?>" alt="Swan Lake" class="img-responsive">
                  </div>
                  <div class="col-sm-8 story-content">
                    <h2><?php echo $why[0]['t_5']?></h2>
                    <p><?php echo $why[0]['des_5']?>
                    </p>
                  </div>
                </div>
              </div>

						</div>

					</div>
				</div>
			</section>
            <!-- faq section end -->

        </main>
