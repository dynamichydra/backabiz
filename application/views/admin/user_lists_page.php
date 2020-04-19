<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>User List</title>
</head>
<body>
  <div class="app" id="app">

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>User List</h2>
      <?php
    $msg=$this->session->flashdata('msg');
    if($msg != "")
    {
      echo "<div class='alert alert-success'>".$msg."</div>";
    }
  ?>  
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
                  Name
<!--                   <?php echo "<pre>";
                   print_r($users);
                   echo "</pre>";
                   ?>; -->
              </th>
              <th>
                  Email
              </th>
              <th data-hide="phone,tablet">
                  Phone
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Date Joined
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
                                if (!empty($users)) {
                                    foreach ($users as $key=>$vn) { 
                                      if($vn['user_type']=="user"){
                                        ?>
          <tr>
              <td><?php echo $vn['name'];?></td>
              <td><a href><?php echo $vn['email'];?></a></td>
              <td><?php echo $vn['phone'];?></td>
              <td><?php echo $vn['date_joined'];?></td>
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
          <td><div class="w3-bar"><a href="<?php echo base_url('admin/edit_user/').$vn['id']?>" class="md-btn md-raised m-b-sm w-xs blue"  >Edit</a>
            <a href="<?php echo base_url('admin/delete_user/').$vn['id']?>" onclick="return confirm('Are you sure?');" class="md-btn md-raised m-b-sm w-xs red">delete</a></div></td>
          </tr>
          <?php
        }
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
