<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Banner List</title>
</head>
<body>
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Banner List</h2> 
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
                  Title-1
              </th>
              <th data-hide="phone,tablet">
                  Title-2
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Button Title
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Button Link
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
          <?php
                                if (!empty($banner_img)) {
                                    foreach ($banner_img as $key=>$vn) { 
                          
                                        ?>
          <tr>
<!--               <td><?php echo $vn['cat_name'];?></td> -->
              <td><a href><?php echo $vn['title_one'];?></a></td>
              <td><a href><?php echo $vn['title_two'];?></a></td>
              <td><a href><?php echo $vn['button_title'];?></a></td>
              <td><a href><?php echo $vn['button_link'];?></a></td>

<!--               <td>
                <?php
                     if (isset($vn['icon_image'])) {
                        ?>
                    <img src="<?php echo base_url() . 'uploads/banner/' . $vn['icon_image']; ?>" width="5%"><?php 

                    }
                    ?>
              </td> -->
               <!-- <td><?php echo $vn['icon_image'];?></td> -->
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
          <td><div class="w3-bar"><a href="<?php echo base_url('admin/edit_banner/').$vn['id']?>" class="md-btn md-raised m-b-sm w-xs blue"  >Edit</a>
            <a href="<?php echo base_url('admin/delete_banner/').$vn['id']?>" onclick="return confirm('Are you sure?');" class="md-btn md-raised m-b-sm w-xs red">delete</a></div></td>
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
</body>
</html>