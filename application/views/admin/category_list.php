<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Category List</h2> 
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
                  Category Name
              </th>
              <th data-hide="phone,tablet">
                  Icon Name
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Icon Image
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
                                if (!empty($category)) {
                                    foreach ($category as $key=>$vn) { 
                          
                                        ?>
          <tr>
              <td><?php echo $vn['cat_name'];?></td>
              <td><a href><?php echo $vn['icon_name'];?></a></td>

              <td>
                <?php
                     if (isset($vn['icon_image'])) {
                        ?>
                    <img src="<?php echo base_url() . 'uploads/category/' . $vn['icon_image']; ?>" width="5%"><?php 

                    }
                    ?>
              </td>
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
          <td><div class="w3-bar"><a href="<?php echo base_url('admin/category/').$vn['id']?>" class="md-btn md-raised m-b-sm w-xs blue"  >Edit</a>
            <a href="<?php echo base_url('admin/delete_category/').$vn['id']?>" onclick="return confirm('Are you sure?');" class="md-btn md-raised m-b-sm w-xs red">delete</a></div></td>
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