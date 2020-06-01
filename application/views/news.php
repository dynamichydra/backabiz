<main>
  <style>
  p {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    line-height: 16px;
    max-height: 100px;

    /* The number of lines to be displayed */
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
  }
  </style>
          <!-- Breadcrumbs -->
          <?php $this->load->view('include/small_banner');?>
<!-- end breadcrumbs-sec -->

          <!-- faq-sec Section -->
            <section id="news-sec" class="section-padding">
              <div class="container">
                <div class="row">

                  <div class="col-md-8">

                    <?php
                              if (!empty($news)) {
                                foreach($news as $k=>$value){
                                  ?>
                      <div class="news-wrap">
	                      <div class="news-wrap-container">
                          <?php
                    $url = str_replace(' ','-',$value['title']);
                    $url = str_replace(":",'',$url);
                    $url = str_replace("'",'',$url);
                ?>
	                        <a href="<?php echo base_url('blogs/').urlencode($url);?>"><img src="<?php echo base_url('uploads/banner/' . $value['image']); ?>" style="max-width:750px;" alt="project-one" class="img-responsive"></a>
	                      </div>

	                      <div class="news-details">
	                      	<div class="newscategory-list"><a href="#"><?php echo $value['category'];?></a></div>
	                      	<ul class="new-meta">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Jane Smith</a></li> -->
                <?php $datetime = explode(" ",$value['date_added']);
                $date = $datetime[0]; ?>
								<li><a href="#"><i class="fa fa-calendar"></i> <?php echo $date;?></a></li>
								<!-- <li><a href="#"><i class="fa fa-comments"></i> 0 comments</a></li> -->
							</ul>
	                        <h2 class="news__title"><a href="<?php echo base_url('blogs/').urlencode($url);?>"><?php echo $value['title'];?></a></h2>
	                        <p><?php echo $value['description'];?></p>
	                      </div>
                    </div><!--end news-wrap-->
                    <?php
                    }

                    }
                    ?>



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
                          <!-- <li><a href="#">We sell beautiful headphones</a></li>
                          <li><a href="#">Important brands have given us their trust</a></li>
                          <li><a href="#">Hello world!</a></li> -->
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
     </div>
