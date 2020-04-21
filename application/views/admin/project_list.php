<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Projects</title>
</head>
<body>
  <div class="app" id="app">

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Project List</h2>
      <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?> 
      <!-- <small>Make HTML tables on smaller devices look awesome</small> -->
    </div>
    <div class="box-body">
      Search: <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
    </div>
    <div>
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th data-toggle="true">
                  Title
<!--                   <?php echo "<pre>";
                   print_r($users);
                   echo "</pre>";
                   ?>; -->
              </th>
              <th>
                  Category
              </th>
              <th data-hide="phone,tablet">
                  Start Date
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  End Date
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Funding Goal
              </th>
              <th data-hide="phone">
                  Status
              </th>
              <th data-hide="phone">
                  action
              </th>
          </tr>
        </thead>
        <tbody>
          <!-- <?php print_r('$data'); ?> -->
          <?php
                                if (!empty($project)) {
                                    foreach ($project as $key=>$vn) { 
                                        ?>
          <tr>
              <td><?php echo $vn['title'];?></td>
              <td><a href><?php echo $vn['category'];?></a></td>
              <td><?php echo $vn['start_date'];?></td>
              <td><?php echo $vn['end_date'];?></td>
              <td><?php echo $vn['funding_goal'];?></td>
              <?php
              if($vn['status']=="active"){
                ?>
              <td data-value="1"><span class="label success" title="Active">Active</span></td>
              <?php
            }else{
              ?>
            <td data-value="3"><span class="label warning" title="Disabled">Suspended</span></td>
            <?php
          }
          ?>
          <td><div class="w3-bar"><a href="<?php echo base_url('admin/edit_project/').$vn['id']?>" class="md-btn md-raised m-b-sm w-xs blue"  >Edit</a>
            <a href="<?php echo base_url('admin/delete_project/').$vn['id']?>" onclick="return confirm('Are you sure?');" class="md-btn md-raised m-b-sm w-xs red">delete</a></div></td>
          </tr>
          <?php
        }
           }
                                ?>
        </tbody>
        <tfoot class="hide-if-no-paging">
          <tr>
              <td colspan="5" class="text-center">
                  <ul class="pagination"></ul>
              </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
</body>
</html>
