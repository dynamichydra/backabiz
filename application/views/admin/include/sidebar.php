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
