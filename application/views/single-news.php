<main>
          <!-- Breadcrumbs -->
            <section class="breadcrumbs-sec" style="background: url(<?php echo base_url()?>/assets/images/breadcrumbs-bg.jpg) no-repeat;">
              <div class="container">
                <div class="row">
                      <div class="news-single-details col-md-12 text-center">
                          <!-- <div class="newscategory-list"><a href="#"><?php echo $news[0]['category'];?></a></div> -->
                          <h2 class="news__title"><a href="#"><?php echo $news[0]['title'];?></a></h2>
                          <ul class="new-meta">
                            <!-- <li><a href="#"><i class="fa fa-user"></i> Jane Smith</a></li> -->
                            <?php $datetime = explode(" ",$news[0]['date_added']);
                            $date = $datetime[0]; ?>
                            <li><a href="#"><i class="fa fa-calendar"></i> <?php echo $date;?></a></li>
                            <!-- <li><a href="#"><i class="fa fa-comments"></i> 0 comments</a></li> -->
                          </ul>
                      </div>
                </div>
              </div><!-- end container -->
            </section><!-- end breadcrumbs-sec -->

          <!-- faq-sec Section -->
            <section id="news-sec" class="section-padding">
              <div class="container">
                <div class="row">

                  <div class="col-md-8">
                    <div class="news-single-details">
                      <?php echo $news[0]['description'];?>
                    </div><!--end news-wrap-->


                  </div>
                  <div class="col-md-4">
                    <div id="recent-posts" class="sidebar-item">
                        <h4 class="sidebar-title">Recent Posts</h4>
                        <ul>
                          <?php
                                    if (!empty($latest)) {
                                      foreach($latest as $k=>$value){
                                        ?>
                                        <?php
                                  $url = str_replace(' ','-',$value['title']);
                                  $url = str_replace(":",'',$url);
                                  $url = str_replace("'",'',$url);
                              ?>
                          <li><a href="<?php echo base_url('blogs/').urlencode($url);?>" aria-current="page"><?php echo $value['title'];?></a></li>
                          <?php
                        }
                      }
                          ?>
                        </ul>
                        <div class="sidebar-divider-pro"></div>
                    </div><!--end recent-posts-->

                    <!-- <div id="recent-comments" class="sidebar-item">
                        <h4 class="sidebar-title">Recent Comments</h4>
                        <ul>
                          <li><a href="#" aria-current="page">Jane Smith on Important brands have given us their trust</a></li>
                          <li><a href="#">Jane Smith on Campaigns with perks are one step closer</a></li>
                          <li><a href="#">A WordPress Commenter on Hello world!</a></li>
                        </ul>
                        <div class="sidebar-divider-pro"></div>
                    </div><!--end recent-comments-->

                    <!-- <div id="archives" class="sidebar-item">
                        <h4 class="sidebar-title">Archives</h4>
                        <ul>
                          <li><a href="#" aria-current="page">January 2020</a></li>
                          <li><a href="#">December 2019</a></li>
                          <li><a href="#">November 2019</a></li>
                          <li><a href="#">October 2019</a></li>
                        </ul>
                        <div class="sidebar-divider-pro"></div>
                    </div><!--end recent-comments-->

                  </div>

                </div>
              </div>
            </section>
        </main>
