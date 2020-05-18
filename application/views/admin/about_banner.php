<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>About Banner</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>About Banner</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/insert_about_banner')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" value="<?php if (isset($feature[0]['title'])) { echo $feature[0]['title'];}
                        ?>" placeholder="Enter Title" value="">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="b_title">Button Title</label>
              <input type="text" class="form-control" name="b_title" id="b_title" value="<?php if (isset($feature[0]['b_title'])) { echo $feature[0]['b_title'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="b_link">Button Link</label>
              <input type="text" class="form-control" name="b_link" id="b_link" value="<?php if (isset($feature[0]['b_link'])) { echo $feature[0]['b_link'];}
                        ?>" placeholder="Enter Title-2">
            </div>
            <div class="form-group">
              <label for="p_image">Image</label>
              <input type="file" name="p_image" id="p_image" class="form-control">
              <!-- <p class="help-block">Upload a project feature image.</p> -->
            </div>
            <button type="submit"  class="btn white m-b">Submit</button><br>
            <label for="exampleInputEmail1">Last uploaded Image :</label><br>
            <div style="width:100%; padding: 3%; background-color: #fff;">
                  <?php if (isset($feature[0]['image'])) {
                      ?><img src="<?php echo base_url() . 'uploads/banner/' . $feature[0]['image']; ?>" width="100%"><?php }
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
