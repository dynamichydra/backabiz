<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title> How Backabiz Works</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2> How Backabiz Works</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/Insert_how_backabiz')?>" enctype="multipart/form-data">
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
            </div>
            <div class="form-group">
              <label for="footer_b_title">Footer Title</label>
              <input type="text" class="form-control" name="footer_b_title" id="footer_b_title" value="<?php if (isset($feature[0]['bottom_title'])) { echo $feature[0]['bottom_title'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_des">Footer Description</label>
              <input type="text" class="form-control" name="footer_b_des" id="footer_b_des" value="<?php if (isset($feature[0]['bottom_description'])) { echo $feature[0]['bottom_description'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_button">Footer Button Name</label>
              <input type="text" class="form-control" name="footer_b_button" id="footer_b_button" value="<?php if (isset($feature[0]['bottom_button'])) { echo $feature[0]['bottom_button'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_link">Footer Button Link</label>
              <input type="text" class="form-control" name="footer_b_link" id="footer_b_link" value="<?php if (isset($feature[0]['button_link'])) { echo $feature[0]['button_link'];}
                        ?>" placeholder="Enter Button Link" value="">
            </div>
            <div class="form-group">
              <label for="title">Banner Title</label>
              <input type="text" class="form-control" name="title" id="title" value="<?php if (isset($feature[0]['banner_title'])) { echo $feature[0]['banner_title'];}
                        ?>" placeholder="Enter Title">
                        <!-- <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value=""> -->
            </div>
            <div class="form-group">
              <label for="description">Banner Description</label>
              <input type="text" class="form-control" name="description" id="description" value="<?php if (isset($feature[0]['banner_description'])) { echo $feature[0]['banner_description'];}
                        ?>" placeholder="Enter Sub Title">
            </div>

            <div class="form-group">
              <label for="p_image">Banner Image</label>
              <input type="file" name="p_image" id="p_image" class="form-control">
              <!-- <p class="help-block">Upload a project feature image.</p> -->
            </div>
            <button type="submit"  class="btn white m-b">Submit</button><br>
            <label for="exampleInputEmail1">Last uploaded Banner Image :-</label><br>
            <div style="width:100%; padding: 3%; background-color: #fff;">
                  <?php if (isset($feature[0]['banner_image'])) {
                      ?><img src="<?php echo base_url() . 'uploads/banner/' . $feature[0]['banner_image']; ?>" width="100%"><?php }
                  ?>
              </div>
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
