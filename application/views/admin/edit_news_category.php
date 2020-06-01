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
          <h2>Edit Category</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <?php
                    foreach ($category as $key=>$vn) {
                        ?>

          <form role="form" method="post" action="<?php echo base_url('admin/insert_news_category/').$vn['id']?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name">Categrory Name</label>
              <input type="text" class="form-control" name="cat_name" id="name" placeholder="Enter Categrory Name" value="<?php echo $vn['category_name'];?>">
            </div>
            <button type="submit"  class="btn white m-b">Update</button>
            <?php
                    }
                    ?>
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
