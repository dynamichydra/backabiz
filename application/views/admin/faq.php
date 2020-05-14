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
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" action="<?php echo base_url('admin/insert_faq')?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Question:-</label>
              <input type="text" class="form-control" name="question" id="exampleInputEmail1" placeholder="Enter name">
            </div>
<!--             <div class="form-group">
              <label for="exampleInputEmail1">Answer:-</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div> -->
            <div class="form-group">
                            <label for="exampleInputEmail1">Answer:-</label>
                            <textarea id="editor1" name="answer" rows="10" cols="80"><?php if (!empty($pagecontent["page_content"])) {
    echo $pagecontent["page_content"];
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
</script>

</body>
</html>
