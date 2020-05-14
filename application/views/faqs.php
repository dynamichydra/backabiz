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

                                        ?>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="faq-links"><?php echo $faq[0]['ques'];?> </a>
                          </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                          <div class="panel-body"><?php echo $faq[0]['ans'];?>
                        </div>
                        </div>
                      </div>
                      <?php if(!empty($faq[1]['ques'])){?>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="faq-links"><?php echo $faq[1]['ques'];?></a>
                            </h4>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php echo $faq[1]['ans'];?>
                          </div>
                          </div>
                        </div>
                        <?php
                      }
                        ?>
                        <?php if(!empty($faq[2]['ques'])){?>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="faq-links"><?php echo $faq[2]['ques'];?></a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">
                                <?php echo $faq[2]['ans'];?>
                            </div>
                            </div>
                          </div>
                          <?php
                        }
                          ?>
                          <?php if(!empty($faq[3]['ques'])){?>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="faq-links"><?php echo $faq[3]['ques'];?></a>
                                </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <?php echo $faq[3]['ans'];?>
                              </div>
                              </div>
                            </div>
                            <?php
                          }
                            ?>
                            <?php if(!empty($faq[4]['ques'])){?>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="faq-links"><?php echo $faq[4]['ques'];?></a>
                                  </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php echo $faq[4]['ans'];?>
                                </div>
                                </div>
                              </div>
                              <?php
                            }
                              ?>

                              <?php if(!empty($faq[5]['ques'])){?>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="faq-links"><?php echo $faq[5]['ques'];?></a>
                                    </h4>
                                  </div>
                                  <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      <?php echo $faq[5]['ans'];?>
                                  </div>
                                  </div>
                                </div>
                                <?php
                              }
                                ?>

                                <?php if(!empty($faq[6]['ques'])){?>
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="faq-links"><?php echo $faq[6]['ques'];?></a>
                                      </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <?php echo $faq[6]['ans'];?>
                                    </div>
                                    </div>
                                  </div>
                                  <?php
                                }
                                  ?>

                                  <?php if(!empty($faq[7]['ques'])){?>
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="faq-links"><?php echo $faq[7]['ques'];?></a>
                                        </h4>
                                      </div>
                                      <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          <?php echo $faq[7]['ans'];?>
                                      </div>
                                      </div>
                                    </div>
                                    <?php
                                  }
                                    ?>
                                    <?php if(!empty($faq[8]['ques'])){?>
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="faq-links"><?php echo $faq[8]['ques'];?></a>
                                          </h4>
                                        </div>
                                        <div id="collapse9" class="panel-collapse collapse">
                                          <div class="panel-body">
                                            <?php echo $faq[8]['ans'];?>
                                        </div>
                                        </div>
                                      </div>
                                      <?php
                                    }
                                      ?>
                                      <?php if(!empty($faq[9]['ques'])){?>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="faq-links"><?php echo $faq[9]['ques'];?></a>
                                            </h4>
                                          </div>
                                          <div id="collapse10" class="panel-collapse collapse">
                                            <div class="panel-body">
                                              <?php echo $faq[9]['ans'];?>
                                          </div>
                                          </div>
                                        </div>
                                        <?php
                                      }
                                        ?>
                                        <?php if(!empty($faq[10]['ques'])){?>
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="faq-links"><?php echo $faq[10]['ques'];?></a>
                                              </h4>
                                            </div>
                                            <div id="collapse11" class="panel-collapse collapse">
                                              <div class="panel-body">
                                                <?php echo $faq[10]['ans'];?>
                                            </div>
                                            </div>
                                          </div>
                                          <?php
                                        }
                                          ?>
                      <?php
                  }
                      ?>



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
        <!-- jquery/js -->

<script>
var acc = document.getElementsByClassName("faq-links");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
this.classList.toggle("active");
var panel = this.nextElementSibling;
if (panel.style.maxHeight) {
panel.style.maxHeight = null;
} else {
panel.style.maxHeight = panel.scrollHeight + "px";
}
});
}
</script>
