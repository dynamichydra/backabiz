<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Manage CMS</h2>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <form role="form" action="<?php echo base_url('admin/updatecms') ; ?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Title</label>
                            <input type="text" class="form-control" name="display_name" value="<?php echo ($content)?$content["display_name"]:''; ?>">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page</label>
                            <select name="page_title" class="form-control" >
                              <option <?php echo ($content && $content["page_title"]=='about-us')?'selected':''; ?> value="about-us">About Us Page</option>
                              <option <?php echo ($content && $content["page_title"]=='contact-us')?'selected':''; ?> value="contact-us">Contact Us Page</option>
                              <option <?php echo ($content && $content["page_title"]=='faq')?'selected':''; ?> value="faq">FAQ Page</option>
                              <option <?php echo ($content && $content["page_title"]=='privacy-policy')?'selected':''; ?> value="privacy-policy">Privacy Policy Page</option>
                              <option <?php echo ($content && $content["page_title"]=='terms-of-use')?'selected':''; ?> value="terms-of-use">Terms & Conditions Page</option>
                              <option <?php echo ($content && $content["page_title"]=='refund')?'selected':''; ?> value="refund">Refunds Page</option>
                              <option <?php echo ($content && $content["page_title"]=='testimonials')?'selected':''; ?> value="testimonials">Testimonials</option>
                              <option <?php echo ($content && $content["page_title"]=='home_market')?'selected':''; ?> value="home_market">Home Market Concept</option>
                              <option <?php echo ($content && $content["page_title"]=='home_number')?'selected':''; ?> value="home_number">Home Number</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Content</label>
                            <textarea  name="content" rows="10" cols="80"><?php echo ($content)?$content["page_content"]:''; ?></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" class="form-control" name="id" value="<?php echo ($content)?$content["id"]:''; ?>">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</div>
</div>
</div>


<script>
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
</script>
