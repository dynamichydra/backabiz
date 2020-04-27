         <!-- body content start -->
        <main>
          <!-- faq-sec Section -->
            <section  class="section-padding">
              <div class="container">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="panel-group faq-list" >
                      <?php
                      if($msg != "")
                      {
                        echo "<div class='alert alert-".$type."'>".$msg."</div>";
                      }
                    ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </main>
