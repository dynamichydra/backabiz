  <!-- aside -->
  <div id="aside" class="app-aside modal fade nav-expand">
    <div class="left navside black dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ></div>
        	<img src="<?php echo base_url(); ?>/assets/images/backabiz.svg" alt="." class="hide">
        	<!-- <span class="hidden-folded inline">backabiz</span> -->
        </a>
        <!-- / brand -->
      </div>
      <div flex-no-shrink>
        <div ui-include="'../views/blocks/aside.top.2.html'"></div>
      </div>
      <div flex class="hide-scroll">
        <nav class="scroll nav-stacked nav-active-primary">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>
              
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
                  <!-- <span class="nav-label">
                    <b class="label rounded label-sm primary">5</b>
                  </span> -->
                  <!-- <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span> -->
                  <span class="nav-text">User management</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/add_user'); ?>" >
                      <span class="nav-text">Add user</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/user_lists'); ?>" >
                      <span class="nav-text">User list</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <!-- <span class="nav-label">
                    <b class="label rounded label-sm primary">5</b>
                  </span> -->
                  <!-- <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span> -->
                  <span class="nav-text">Home Page Settings</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/banner'); ?>" >
                      <span class="nav-text">Upload Banner</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/banner_list'); ?>" >
                      <span class="nav-text">Banner List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <!-- <span class="nav-label">
                    <b class="label rounded label-sm primary">5</b>
                  </span> -->
                  <!-- <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span> -->
                  <span class="nav-text">Category $ List</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/category'); ?>" >
                      <span class="nav-text">category</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/category_list'); ?>" >
                      <span class="nav-text">category List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <!-- <span class="nav-label">
                    <b class="label rounded label-sm primary">5</b>
                  </span> -->
                  <!-- <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span> -->
                  <span class="nav-text">Manage Project</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/project'); ?>" >
                      <span class="nav-text">New Project</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/project_list'); ?>" >
                      <span class="nav-text">Project list</span>
                    </a>
                  </li>
                </ul>
              </li>



              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">CMS management</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url('admin/cmspages/about-us'); ?>" >
                      <span class="nav-text">About us page</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/cmspages/contact-us'); ?>" >
                      <span class="nav-text">Contact us page</span>
                    </a>
                  </li>
                  <li>
                    <!-- <a href="<?php echo base_url('admin/cmspages/faq'); ?>" > -->
                      <a href="<?php echo base_url('admin/faq_list'); ?>" >
                      <span class="nav-text">FAQ page</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/cmspages/privacy-policy'); ?>" >
                      <span class="nav-text">Privacy policy page</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/cmspages/terms-of-use'); ?>" >
                      <span class="nav-text">Terms of use page</span>
                    </a>
                  </li>
                </ul>
              </li>


          
              <li class="nav-header hidden-folded">
                <small class="text-muted">Help</small>
              </li>
              
              <li class="hidden-folded" >
                <a href="docs.html" >
                  <span class="nav-text">Documents</span>
                </a>
              </li>
          
            </ul>
        </nav>
      </div>
      <div flex-no-shrink>
        <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
      </div>
    </div>
  </div>
  <!-- / aside -->