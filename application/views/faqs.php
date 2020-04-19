         <!-- body content start -->
        <main>
          <!-- Breadcrumbs -->
            <section class="breadcrumbs-sec" style="background: url(<?php echo base_url(); ?>assets/frontend/assets/images/breadcrumbs-bg.jpg) no-repeat;">
              <div class="container">
                <div class="breadcrumbs-text">
                  <h3>FAQs</h3>
                  <ul>
                    <li>
                      <a href="index.html">home</a>
                    </li>
                    <li>
                      <span>FAQs</span>
                    </li>
                  </ul>
                </div>
              </div><!-- end container --> 
            </section><!-- end breadcrumbs-sec -->
         
          <!-- faq-sec Section -->
            <section id="faq-sec" class="section-padding">
              <div class="container">
                <div class="row">

                  <div class="col-md-10 col-md-offset-1">
                    <div class="panel-group faq-list" id="accordion">

                      <?php
                                if (!empty($faq)) {
                                    foreach ($faq as $key=>$vn) { 
                          
                                        ?>
                      <div class="panel panel-default">
                        <div class="panel-heading">   
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="faq-links"><?php echo $vn['ques'];?> </a>  
                          </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                          <div class="panel-body"><?php echo $vn['ans'];?>
                        </div>
                        </div>
                      </div>
                      <?php
                    }
                  }
                      ?>
<!--                       <div class="panel panel-default">
                        <div class="panel-heading">   
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="faq-links">Can I pay for my order by credit card?</a>  
                          </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.
                        </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">   
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="faq-links">Can I pay for my order by credit card? </a>  
                          </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.
                        </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">   
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="faq-links">Can I pay for my order by credit card?</a>  
                          </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.
                        </div>
                        </div>
                      </div>    
                      <div class="panel panel-default">
                        <div class="panel-heading">   
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="faq-links">Can I pay for my order by credit card?</a>  
                          </h4>
                        </div>   
                        <div id="collapse5" class="panel-collapse collapse">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.
                        </div>
                        </div>
                      </div> -->
  
                      <div class="faq-fot">
                        <h2>Still have a question?</h2>
                        <a href="#" class="site-btn">GET IN TOUCH WITH US</a>
                      </div>
                    </div> 
                  </div>

                </div>
              </div>
            </section>
        </main>