<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Blogs List</title>
</head>
<body>
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Blogs List</h2>
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
              </th>
              <th data-toggle="true">
                  Description
              </th>
              <th data-hide="phone,tablet">
                  Category
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
                                if (!empty($news)) {
                                    foreach ($news as $key=>$vn) {

                                        ?>
          <tr>
              <td><?php echo $vn['title'];?></td>
              <td><?php echo $vn['description'];?></td>
              <td><a href><?php echo $vn['category'];?></a></td>
               <!-- <td><?php echo $vn['icon_image'];?></td> -->
               <?php
               if($vn['status']=="active"){
                 ?>
               <td data-value="1"><a href="<?php echo base_url('admin/news_inactive/').$vn['id']?>" class="btn btn-outline b-info text-info"  >Active</a></td>
               <?php
             }else{
               ?>
             <td data-value="1"><a href="<?php echo base_url('admin/news_active/').$vn['id']?>" class="btn btn-outline b-black text-black"  >Inactive</a></td>
             <?php
           }
           ?>
          <td><div class="w3-bar"><a href="<?php echo base_url('admin/edit_news/').$vn['id']?>" class="md-btn md-raised m-b-sm w-xs blue"  >Edit</a>
            <a href="<?php echo base_url('admin/delete_news/').$vn['id']?>" onclick="return confirm('Are you sure?');" class="md-btn md-raised m-b-sm w-xs red">delete</a></div></td>
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
