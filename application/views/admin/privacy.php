<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Privacy</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Privacy</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/insert_privacy')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" value="<?php if (isset($feature[0]['title'])) { echo $feature[0]['title'];}
                        ?>" placeholder="Enter Title" value="">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor1" name="description" rows="10" cols="80"><?php if (isset($feature[0]["description"])) {
                            echo $feature[0]["description"];
                        } ?></textarea>
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
  <script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>
