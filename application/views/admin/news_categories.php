<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Category</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Add New Category</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/insert_news_category')?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name">Categrory Name</label>
              <input type="text" class="form-control" name="cat_name" id="name" placeholder="Enter name" value="">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputEmail1">Icon Name</label>
              <input type="text" class="form-control" name="icon_name" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="cat_description">Categrory Description</label>
              <input type="text" class="form-control" name="cat_description" id="cat_description" placeholder="Enter Description">
            </div> -->
            <button type="submit"  class="btn white m-b">Submit</button>
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
