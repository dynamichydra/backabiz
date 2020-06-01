<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title> Why Backabiz</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2> Why Backabiz</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/Insert_why_backabiz')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="t_1">Title-1</label>
              <input type="text" class="form-control" name="t_1" id="t_1" value="<?php if (isset($feature[0]['t_1'])) { echo $feature[0]['t_1'];}
                        ?>" placeholder="Enter Title" value="">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_1">Title-1 Description</label>
              <!-- <input type="text" class="form-control" name="des_1" id="des_1" value="<?php if (isset($feature[0]['des_1'])) { echo $feature[0]['des_1'];}
                        ?>" placeholder="Enter Sub Title" value=""> -->
                        <textarea id="editor1" name="des_1" rows="10" cols="80"><?php if (!empty($feature[0]["des_1"])) {
echo $feature[0]["des_1"];
} ?></textarea>
            </div>
            <div class="form-group">
              <label for="image_1">Image:-</label>
              <input type="file" name="image_1" id="image_1" class="form-control">
              <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/banner/' . $feature[0]["image_1"]; ?>">Click here to see</a></small>
            </div>
            <div class="form-group">
              <label for="t_2">Title-2</label>
              <input type="text" class="form-control" name="t_2" id="t_2" value="<?php if (isset($feature[0]['t_2'])) { echo $feature[0]['t_2'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_2">Title-2 Description</label>
              <!-- <input type="text" class="form-control" name="des_2" id="des_2" value="<?php if (isset($feature[0]['des_2'])) { echo $feature[0]['des_2'];}
                        ?>" placeholder="Enter Sub Title" value=""> -->
                        <textarea id="editor2" name="des_2" rows="10" cols="80"><?php if (!empty($feature[0]["des_2"])) {
echo $feature[0]["des_2"];
} ?></textarea>
            </div>
            <div class="form-group">
              <label for="image_2">Image:-</label>
              <input type="file" name="image_2" id="image_2" class="form-control">
              <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/banner/' . $feature[0]["image_2"]; ?>">Click here to see</a></small>
            </div>
            <div class="form-group">
              <label for="t_3">Title-3</label>
              <input type="text" class="form-control" name="t_3" id="t_3" value="<?php if (isset($feature[0]['t_3'])) { echo $feature[0]['t_3'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_3">Title-3 Description</label>
              <!-- <input type="text" class="form-control" name="des_3" id="des_3" value="<?php if (isset($feature[0]['des_3'])) { echo $feature[0]['des_3'];}
                        ?>" placeholder="Enter Sub Title" value=""> -->
                        <textarea id="editor3" name="des_3" rows="10" cols="80"><?php if (!empty($feature[0]["des_3"])) {
echo $feature[0]["des_3"];
} ?></textarea>
            </div>
            <div class="form-group">
              <label for="image_3">Image:-</label>
              <input type="file" name="image_3" id="image_3" class="form-control">
              <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/banner/' . $feature[0]["image_3"]; ?>">Click here to see</a></small>
            </div>
            <div class="form-group">
              <label for="t_4">Title-4</label>
              <input type="text" class="form-control" name="t_4" id="t_4" value="<?php if (isset($feature[0]['t_4'])) { echo $feature[0]['t_4'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_4">Title-4 Description</label>
              <!-- <input type="text" class="form-control" name="des_4" id="des_4" value="<?php if (isset($feature[0]['des_4'])) { echo $feature[0]['des_4'];}
                        ?>" placeholder="Enter Sub Title" value=""> -->
                        <textarea id="editor4" name="des_4" rows="10" cols="80"><?php if (!empty($feature[0]["des_4"])) {
echo $feature[0]["des_4"];
} ?></textarea>
            </div>
            <div class="form-group">
              <label for="image_4">Image:-</label>
              <input type="file" name="image_4" id="image_4" class="form-control">
              <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/banner/' . $feature[0]["image_4"]; ?>">Click here to see</a></small>
            </div>
            <div class="form-group">
              <label for="t_5">Title-5</label>
              <input type="text" class="form-control" name="t_5" id="t_5" value="<?php if (isset($feature[0]['t_5'])) { echo $feature[0]['t_5'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="des_5">Title-5 Description</label>
              <!-- <input type="text" class="form-control" name="des_5" id="des_5" value="<?php if (isset($feature[0]['des_5'])) { echo $feature[0]['des_5'];}
                        ?>" placeholder="Enter Sub Title" value=""> -->
                        <textarea id="editor5" name="des_5" rows="10" cols="80"><?php if (!empty($feature[0]["des_5"])) {
echo $feature[0]["des_5"];
} ?></textarea>
            </div>
            <div class="form-group">
              <label for="image_5">Image:-</label>
              <input type="file" name="image_5" id="image_5" class="form-control">
              <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/banner/' . $feature[0]["image_5"]; ?>">Click here to see</a></small>
            </div>

            <h3>Top section</h3>
            <hr>
            <div class="form-group">
              <label for="footer_b_title">Title:-</label>
              <input type="text" class="form-control" name="title" id="footer_b_title" value="<?php if (isset($feature[0]['banner_title'])) { echo $feature[0]['banner_title'];}
                        ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_des">Description:-</label>
              <!-- <input type="text" class="form-control" name="description" id="footer_b_des" value="<?php if (isset($feature[0]['bottom_description'])) { echo $feature[0]['bottom_description'];}
                        ?>" placeholder="Enter Sub Title" value=""> -->
                        <textarea id="editor6" name="description" rows="10" cols="80"><?php if (!empty($feature[0]["banner_description"])) {
echo $feature[0]["banner_description"];
} ?></textarea>
            </div>
            <div class="form-group">
              <label for="footer_b_button">Button Name:-</label>
              <input type="text" class="form-control" name="footer_b_button" id="footer_b_button" value="<?php if (isset($feature[0]['bottom_button'])) { echo $feature[0]['bottom_button'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="footer_b_link">Button Link:-</label>
              <input type="text" class="form-control" name="footer_b_link" id="footer_b_link" value="<?php if (isset($feature[0]['button_link'])) { echo $feature[0]['button_link'];}
                        ?>" placeholder="Enter Button Link" value="">
            </div>

            <div class="form-group">
              <label for="p_image">Image:-</label>
              <input type="file" name="p_image" id="p_image" class="form-control">
              <!-- <p class="help-block">Upload a project feature image.</p> -->
            </div>
            <button type="submit"  class="btn white m-b">Submit</button><br>
            <label for="exampleInputEmail1">Last uploaded header Image :-</label><br>
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
  <!-- <script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | media',
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script> -->
<script>
CKEDITOR.replace( 'editor1' );
CKEDITOR.replace( 'editor2' );
CKEDITOR.replace( 'editor3' );
CKEDITOR.replace( 'editor4' );
CKEDITOR.replace( 'editor5' );
CKEDITOR.replace( 'editor6' );
</script>
</body>
</html>
