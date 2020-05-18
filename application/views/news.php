<main>
          <!-- Breadcrumbs -->
          <?php $this->load->view('include/small_banner');?>
<!-- end breadcrumbs-sec -->

          <!-- faq-sec Section -->
            <section id="news-sec" class="section-padding">
              <div class="container">
                <div class="row">

                  <div class="col-md-8">
                      <div class="news-wrap">
	                      <div class="news-wrap-container">
	                        <a href="#"><img src="<?php echo base_url()?>assets/images/news-blog.jpg" alt="project-one" class="img-responsive"></a>
	                      </div>

	                      <div class="news-details">
	                      	<div class="newscategory-list"><a href="#">design short film</a></div>
	                      	<ul class="new-meta">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Jane Smith</a></li> -->
								<li><a href="#"><i class="fa fa-calendar"></i> December 9, 2019</a></li>
								<!-- <li><a href="#"><i class="fa fa-comments"></i> 0 comments</a></li> -->
							</ul>
	                        <h2 class="news__title"><a href="#">Sonoma County sell beautiful headphones in Wine Country</a></h2>
	                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies.</p>
	                      </div>
                    </div><!--end news-wrap-->
                     <div class="news-wrap">
	                      <div class="news-wrap-container">
	                        <a href="#"><img src="<?php echo base_url()?>assets/images/news-blog.jpg" alt="project-one" class="img-responsive"></a>
	                      </div>

	                      <div class="news-details">
	                      	<div class="newscategory-list"><a href="#">design short film</a></div>
	                      	<ul class="new-meta">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Jane Smith</a></li> -->
								<li><a href="#"><i class="fa fa-calendar"></i> December 9, 2019</a></li>
								<!-- <li><a href="#"><i class="fa fa-comments"></i> 0 comments</a></li> -->
							</ul>
	                        <h2 class="news__title"><a href="#">Sonoma County sell beautiful headphones in Wine Country</a></h2>
	                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies.</p>
	                      </div>
                    </div><!--end news-wrap-->
                     <div class="news-wrap">
	                      <div class="news-wrap-container">
	                        <a href="#"><img src="<?php echo base_url()?>assets/images/news-blog.jpg" alt="project-one" class="img-responsive"></a>
	                      </div>

	                      <div class="news-details">
	                      	<div class="newscategory-list"><a href="#">design short film</a></div>
	                      	<ul class="new-meta">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Jane Smith</a></li> -->
								<li><a href="#"><i class="fa fa-calendar"></i> December 9, 2019</a></li>
								<!-- <li><a href="#"><i class="fa fa-comments"></i> 0 comments</a></li> -->
							</ul>
	                        <h2 class="news__title"><a href="#">Sonoma County sell beautiful headphones in Wine Country</a></h2>
	                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies.</p>
	                      </div>
                    </div><!--end news-wrap-->
                  </div>
                  <div class="col-md-4">
                    <div id="recent-posts" class="sidebar-item">
                        <h4 class="sidebar-title">Recent Posts</h4>
                        <ul>
                          <li><a href="#" aria-current="page">Campaigns with perks are one step closer</a></li>
                          <li><a href="#">We sell beautiful headphones</a></li>
                          <li><a href="#">Important brands have given us their trust</a></li>
                          <li><a href="#">Hello world!</a></li>
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
       <!-- jquery/js -->
    <script src="assets/js/jquery.min.js"></script>
      <!-- jquery.flexslider.js -->
    <script src="assets/js/flexslider-min.js"></script>
      <!-- bootstrap js -->
		<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
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
