<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Title Management</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Title Management</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/Insert_title_manage')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="t_1">Title-1</label>
              <input type="text" class="form-control" name="t_1" id="t_1" value="<?php if (isset($feature[0]['t_1'])) { echo $feature[0]['t_1'];}
                        ?>" placeholder="Enter Title" value="">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_1">Title-1 Description</label>
              <input type="text" class="form-control" name="des_1" id="des_1" value="<?php if (isset($feature[0]['des_1'])) { echo $feature[0]['des_1'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="t_2">Title-2</label>
              <input type="text" class="form-control" name="t_2" id="t_2" value="<?php if (isset($feature[0]['t_2'])) { echo $feature[0]['t_2'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_2">Title-2 Description</label>
              <input type="text" class="form-control" name="des_2" id="des_2" value="<?php if (isset($feature[0]['des_2'])) { echo $feature[0]['des_2'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="t_3">Title-3</label>
              <input type="text" class="form-control" name="t_3" id="t_3" value="<?php if (isset($feature[0]['t_3'])) { echo $feature[0]['t_3'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_3">Title-3 Description</label>
              <input type="text" class="form-control" name="des_3" id="des_3" value="<?php if (isset($feature[0]['des_3'])) { echo $feature[0]['des_3'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="t_4">Title-4</label>
              <input type="text" class="form-control" name="t_4" id="t_4" value="<?php if (isset($feature[0]['t_4'])) { echo $feature[0]['t_4'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_4">Title-4 Description</label>
              <input type="text" class="form-control" name="des_4" id="des_4" value="<?php if (isset($feature[0]['des_4'])) { echo $feature[0]['des_4'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="t_5">Title-5</label>
              <input type="text" class="form-control" name="t_5" id="t_5" value="<?php if (isset($feature[0]['t_5'])) { echo $feature[0]['t_5'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_5">Title-5 Description</label>
              <input type="text" class="form-control" name="des_5" id="des_5" value="<?php if (isset($feature[0]['des_5'])) { echo $feature[0]['des_5'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_title">Footer Banner Title</label>
              <input type="text" class="form-control" name="footer_b_title" id="footer_b_title" value="<?php if (isset($feature[0]['footer_b_title'])) { echo $feature[0]['footer_b_title'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_des">Footer Banner Description</label>
              <input type="text" class="form-control" name="footer_b_des" id="footer_b_des" value="<?php if (isset($feature[0]['footer_b_des'])) { echo $feature[0]['footer_b_des'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_button">Footer Banner Button Name</label>
              <input type="text" class="form-control" name="footer_b_button" id="footer_b_button" value="<?php if (isset($feature[0]['footer_b_button'])) { echo $feature[0]['footer_b_button'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_link">Footer Banner Button Link</label>
              <input type="text" class="form-control" name="footer_b_link" id="footer_b_link" value="<?php if (isset($feature[0]['footer_b_link'])) { echo $feature[0]['footer_b_link'];}
                        ?>" placeholder="Enter Button Link" value="">
            </div>
            <button type="submit"  class="btn white m-b">Submit</button><br>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->


<!-- ############ PAGE END-->

    </div>
  </div>

</body>
</html>
