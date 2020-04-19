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
          <h2>Add Category</h2>
        <?php
    $msg=$this->session->flashdata('msg');
    if($msg != "")
    {
      echo "<div class='alert alert-success'>".$msg."</div>";
    }
  ?>  
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/insert_category')?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name">Categrory Name</label>
              <input type="text" class="form-control" name="cat_name" id="name" placeholder="Enter name" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Icon Name</label>
              <input type="text" class="form-control" name="icon_name" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                            <label for="exampleInputFile">Icon Image</label>
                            <input type="file" id="exampleInputFile" name="userfile">

                            <p class="help-block">Upload an image for the icon of this category</p>
                        </div>

            <!-- <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile" class="form-control">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
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
