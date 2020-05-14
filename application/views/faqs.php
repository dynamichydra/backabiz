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
                                  foreach($faq as $k=>$v){
                                    ?>
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse"  class="faq-links"><?php echo $v['ques'];?> </a>
                                        </h4>
                                      </div>
                                      <div class="panel-collapse collapse">
                                        <div class="panel-body"><?php echo $v['ans'];?>
                                      </div>
                                      </div>
                                    </div>
                                    <?php
                                  }

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
