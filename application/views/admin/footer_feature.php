<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Footer Feature</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Footer Feature</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/Insert_footer_feature')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" value="<?php if (isset($feature[0]['title'])) { echo $feature[0]['title'];}
                        ?>" placeholder="Enter Title" value="">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="s_title">Sub Title</label>
              <input type="text" class="form-control" name="s_title" id="s_title" value="<?php if (isset($feature[0]['subtitle'])) { echo $feature[0]['subtitle'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="points">Points</label>
              <input type="text" class="form-control" name="p_1" id="p_1" value="<?php if (isset($feature[0]['p_1'])) { echo $feature[0]['p_1'];}
                        ?>" placeholder="Enter point1">
              <input type="text" class="form-control" name="p_2" id="p_2" value="<?php if (isset($feature[0]['p_2'])) { echo $feature[0]['p_2'];}
                        ?>" placeholder="Enter point2">
              <input type="text" class="form-control" name="p_3" id="p_3" value="<?php if (isset($feature[0]['p_3'])) { echo $feature[0]['p_3'];}
                        ?>" placeholder="Enter point3">
              <input type="text" class="form-control" name="p_4" id="p_4" value="<?php if (isset($feature[0]['p_4'])) { echo $feature[0]['p_4'];}
                        ?>" placeholder="Enter point4">
              <input type="text" class="form-control" name="p_5" id="p_5" value="<?php if (isset($feature[0]['p_5'])) { echo $feature[0]['p_5'];}
                        ?>" placeholder="Enter point5">
            </div>
            <div class="form-group">
              <label for="title_2">Title-2</label>
              <input type="text" class="form-control" name="title_2" id="title_2" value="<?php if (isset($feature[0]['title2'])) { echo $feature[0]['title2'];}
                        ?>" placeholder="Enter Title-2">
            </div>
            <div class="form-group">
              <label for="p_image">Image</label>
              <input type="file" name="p_image" id="p_image" class="form-control">
              <!-- <p class="help-block">Upload a project feature image.</p> -->
            </div>
            <div class="form-group">
              <label for="ys_image">Your Story Background Image</label>
              <input type="file" name="ys_image" id="ys_image" class="form-control">
              <!-- <p class="help-block">Upload a project feature image.</p> -->
            </div>
            <button type="submit"  class="btn white m-b">Submit</button><br>
            <label for="exampleInputEmail1">Last uploaded Image :</label><br>
            <div style="width:100%; padding: 3%; background-color: #fff;">
                  <?php if (isset($feature[0]['image'])) {
                      ?><img src="<?php echo base_url() . 'uploads/banner/' . $feature[0]['image']; ?>" width="100%"><?php }
                  ?>
              </div>
              <label for="exampleInputEmail1">Your Story Last uploaded Image :</label><br>
              <div style="width:100%; padding: 3%; background-color: #fff;">
                    <?php if (!empty($feature[0]['your_story_image'])) {
                        ?><img src="<?php echo base_url() . 'uploads/banner/' . $feature[0]['your_story_image']; ?>" width="100%"><?php }else{
                    ?>
                </div>
                <p><center>-----------N/A----------</center></p><?php
              }
              ?>
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
