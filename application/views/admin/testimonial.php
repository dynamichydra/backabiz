<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Add Testimonial</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Add Testimonial</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/insert_test')?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="test_detail"> Testimonial Detail</label>
              <textarea type="text" class="form-control" name="test_detail" id="test_detail" placeholder="Enter Detail" value=""></textarea>
            </div>
            <div class="form-group">
              <label for="c_name">Client Name</label>
              <input type="text" class="form-control" name="c_name" id="c_name" placeholder="Enter Client Name">
            </div>
            <div class="form-group">
              <label for="desig">Designation</label>
              <input type="text" class="form-control" name="desig" id="desig" placeholder="Enter Designation">
            </div>
          <div class="form-group">
            <label for="test_image">Image</label>
            <input type="file" name="test_image" id="test_image" class="form-control">
            <!-- <p class="help-block">Upload Client image.</p> -->
          </div>
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
  <!-- <script>
      tinymce.init({
        selector: 'textarea',
        height: 200,
        theme: 'modern',
        plugins: 'image print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help code',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | media',
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ],
        image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
          var input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');
          input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
              var id = 'blobid' + (new Date()).getTime();
              var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
              var base64 = reader.result.split(',')[1];
              var blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);
              cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
          };

          input.click();
        }
      });
  </script> -->

</body>
</html>
