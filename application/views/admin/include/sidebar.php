  <!-- aside -->
  <div id="aside" class="app-aside modal fade nav-expand">
    <div class="left navside black dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ></div>
        	<img src="<?php echo base_url(); ?>/assets/images/backabiz.svg" alt="." class="hide">
        	<span class="hidden-folded inline">backabiz</span>
        </a>
        <!-- / brand -->
      </div>

      <div flex class="hide-scroll">
        <nav class="scroll nav-stacked nav-active-primary">

            <ul class="nav" ui-nav>
              <!-- <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li> -->

              <li>
                <a href="<?php echo base_url('admin')?>" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="'../assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">User Management</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/add_user'); ?>" >
                      <span class="nav-text">Add User </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/user_lists'); ?>" >
                      <span class="nav-text">User List </span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-text">Home Page Settings</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/banner'); ?>" >
                      <span class="nav-text">Upload Banner </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/banner_list'); ?>" >
                      <span class="nav-text">Banner List </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/footer_feature'); ?>" >
                      <span class="nav-text">Footer Feature</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/title_manage'); ?>" >
                      <span class="nav-text">Title Management</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/footer_question'); ?>" >
                      <span class="nav-text">Footer Question</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/footer_question_list'); ?>" >
                      <span class="nav-text">Footer Question List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-text">Categories</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/category'); ?>" >
                      <span class="nav-text">Add Category</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/category_list'); ?>" >
                      <span class="nav-text">Category List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-text">Projects</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/project'); ?>" >
                      <span class="nav-text">Add Project</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/project_list'); ?>" >
                      <span class="nav-text">Project List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">Testimonials</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/add_test'); ?>" >
                      <span class="nav-text">Add Testimonial </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/test_list'); ?>" >
                      <span class="nav-text">Testimonials List </span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">About</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/about'); ?>" >
                      <span class="nav-text">About Us </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/about_bottom'); ?>" >
                      <span class="nav-text">Bottom Section </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/funding_team'); ?>" >
                      <span class="nav-text">Add Funding Team </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/funding_team_list'); ?>" >
                      <span class="nav-text">Funding Team List </span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/about_banner'); ?>" >
                      <span class="nav-text">About Banner </span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">FAQ</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/faq'); ?>" >
                      <span class="nav-text">Add FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/faq_list'); ?>" >
                      <span class="nav-text">FAQ List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">Contact</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/contact_us'); ?>" >
                      <span class="nav-text">Contact Us</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="<?php echo base_url('admin/faq_list'); ?>" >
                      <span class="nav-text">FAQ List</span>
                    </a>
                  </li> -->
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-text">How it Works</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/how_title'); ?>" >
                      <span class="nav-text">How it Works?</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/how_backabiz'); ?>" >
                      <span class="nav-text">How Backabiz Works</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/why_backabiz'); ?>" >
                      <span class="nav-text">Why Backabiz</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="<?php echo base_url('admin/help_center'); ?>" >
                      <span class="nav-text">Help Centre</span>
                    </a>
                  </li> -->
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">Footer</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/terms'); ?>" >
                      <span class="nav-text">Terms</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/privacy'); ?>" >
                      <span class="nav-text">Privacy</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/legal'); ?>" >
                      <span class="nav-text">Legal</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">CMS Management</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/cms'); ?>" >
                      <span class="nav-text">New Page</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/cmslist'); ?>" >
                      <span class="nav-text">All Page</span>
                    </a>
                  </li>
                </ul>
              </li>





            </ul>
        </nav>
      </div>

    </div>
  </div>
  <!-- / aside -->
  <script type="text/javascript">

var setSubItemParent = false;

$(document).ready(function () {
    var listItems = $('.navbar ul li');

    $.each(listItems, function(key, litem) {
        iterateLinks(litem);
    })
});

function iterateLinks(liItem) {
    var divchildren = $(liItem).children('div');

    setSubItemParent = false;

    /* If there are div children, iterate them */
    if (divchildren.length > 0) {
        iterateLinks(divchildren[0]);

        /* If an item was set and we're in a div, add active to
           this element as well. */
        if(setSubItemParent) {
            $(liItem).addClass('active');
        }

    }
    else {
        var achildren = $(liItem).children('a');

        /* Run through all a tags and see if they should be active */
        if (achildren.length > 0 ) {
            $.each(achildren, function(key, achild) {
                if (achild.href == document.URL) {
                    $(achild).addClass('active');
                    setSubItemParent = true;
                }
            });
        }
    }
}
  </script>
  <script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        var currentUrl = "<?php  echo current_url();  ?>";
        $('a[href="' + currentUrl + '"]').parents('li,ul').addClass('active');
    });
</script>
