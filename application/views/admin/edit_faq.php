<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>FAQ</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Add New FAQ</h2>
        <?php
    $msg=$this->session->flashdata('msg');
    if($msg != "")
    {
      echo "<div class='alert alert-success'>".$msg."</div>";
    }
  ?>

        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" action="<?php echo base_url('admin/update_faq')?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Question:-</label>
              <input type="text" class="form-control" name="question" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $faq_data[0]['ques'];?>">
              <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $faq_data[0]['id'];?>">
            </div>
<!--             <div class="form-group">
              <label for="exampleInputEmail1">Answer:-</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div> -->
            <div class="form-group">
                            <label for="exampleInputEmail1">Answer:-</label>
                            <textarea id="editor1" name="answer" rows="10" cols="80"><?php if (!empty($faq_data[0]["ans"])) {
    echo $faq_data[0]["ans"];
} ?></textarea>
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
  <script>
  CKEDITOR.replace( 'editor1' );
  // CKEDITOR.replace( 'editor2' );
  // CKEDITOR.replace( 'editor3' );
  // CKEDITOR.replace( 'editor4' );
  // CKEDITOR.replace( 'editor5' );
  // CKEDITOR.replace( 'editor6' );
  </script>

</body>
</html>
