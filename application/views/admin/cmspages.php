<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Content Management</title>
</head>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- <?php print_r($contents);?> -->
                 <?php
                 if (isset($contents)) {
                    foreach ($contents as $key=>$pagecontent) { 
                        ?>
                <form role="form" action="<?php echo base_url('admin/updatepage/') . $pagecontent["page_title"]; ?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pagecontent["display_name"]; ?>" disabled>
                            <input type="hidden" name="page_title" value="<?php echo $pagecontent["page_title"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Content</label>
                            <textarea id="editor1" name="content" rows="10" cols="80"><?php if (!empty($pagecontent["page_content"])) {
    echo $pagecontent["page_content"];
} ?></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Last updated content :</label><br>
                <div style="width:100%; padding: 3%; background-color: #fff; height: 250px; overflow-y: scroll; overflow-x: hidden;"><?php echo $pagecontent["page_content"]; ?></div>
            </div>
            <!-- <?php } } ?> -->
        </div>
    </section>
</div>

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