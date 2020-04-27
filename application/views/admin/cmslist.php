
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>CMS List</h2>
      <?php
      $msg = $this->session->flashdata('msg');
      $type = $this->session->flashdata('type');
      if ($msg) { ?>
        <div class="alert alert-<?php echo $type;?>"> <?= $msg ?> </div>
    <?php } ?>

    </div>
    <div class="box-body">
      Search: <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
    </div>
    <div>
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th data-toggle="true">
                  Page Title
              </th>
              <th>
                  Page Name
              </th>
              <th data-hide="phone">
                  action
              </th>
          </tr>
        </thead>
        <tbody>
          <?php
                                if (!empty($content)) {
                                    foreach ($content as $key=>$vn) {
                                        ?>
          <tr>
              <td><?php echo $vn['display_name'];?></td>
              <td><?php echo $vn['page_title'];?></td>
          <td><div class="w3-bar"><a href="<?php echo base_url('admin/cms/').$vn['id']?>" class="md-btn md-raised m-b-sm w-xs blue"  >Edit</a>
            <a href="<?php echo base_url('admin/cmsdelete/').$vn['id']?>" onclick="return confirm('Are you sure?');" class="md-btn md-raised m-b-sm w-xs red">delete</a></div></td>
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
