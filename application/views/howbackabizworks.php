<main>
          <!-- Breadcrumbs -->
          <?php $this->load->view('include/small_banner');?>
            <!-- end breadcrumbs-sec -->

	        <section id="fundraising-sec" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="fund-cntnt">
								<h2 class="main-heading"><?php echo $how[0]['bottom_title']?> </h2>
								<p><?php echo $how[0]['bottom_description']?></p>
								<a href="<?php echo $how[0]['button_link']?>" class="site-btn"><?php echo $how[0]['bottom_button']?></a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="fund-img"><img src="<?php echo base_url() . 'uploads/banner/' . $how[0]['banner_image']; ?>" draggable="false" class="img-responsive"></div>
						</div>
					</div>
				</div>
			</section>



            <section id="faq-sec" class="section-padding graybg">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<h2 class="main-heading">How to create a successful Backabiz fundraiser</h2>
							<div class="panel-group faq-list" id="accordion">
                <?php
                          if (!empty($faq)) {
                            foreach($faq as $k=>$v){
                              ?>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
			                                <a data-toggle="collapse" class="faq-links"><?php echo $v['ques'];?> </a>
			                            </h4>
									</div>
									<div class="panel-collapse collapse">
										<div class="panel-body">
											<p><?php echo $v['ans'];?></p>
										</div>
									</div>
								</div>
                <?php
              }

}
  ?>

							</div>
							                      <div class="faq-fot">
                        <a href="https://bb.wsdev.in/home/login" class="site-btn">Start a Backabiz</a>
                      </div>
						</div>
					</div>
				</div>
			</section>
            <!-- faq section end -->
            <section id="button-work-sec" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="main-heading"><?php echo $how[0]['banner_title']?></h2>
							<p class="sub-heading"><?php echo $how[0]['banner_description']?></p>
							<div class="col-sm-4">
								<p class="green-circle">1</p>
								<h3><?php echo $how[0]['t_1']?></h3>
								<p><?php echo $how[0]['des_1']?></p>
							</div>
							<div class="col-sm-4">
								<p class="green-circle">2</p>
								<h3><?php echo $how[0]['t_2']?> </h3>
								<p><?php echo $how[0]['des_2']?></p>
							</div>
							<div class="col-sm-4">
								<p class="green-circle">3</p>
								<h3><?php echo $how[0]['t_3']?> </h3>
								<p><?php echo $how[0]['des_3']?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
         <!--- How it Works end -->
        </main>
        <script>
        $( document ).ready(function() {
          $('.faq-links').on('click',function(){
            var has = $(this).hasClass('active');
            $('.panel-collapse').hide(500);
            $('.faq-links').removeClass('active');
            if(!has){
              $(this).addClass('active');
              $(this).closest('.panel-default').find('.panel-collapse').show(500);
            }


          });
        });
        </script>
