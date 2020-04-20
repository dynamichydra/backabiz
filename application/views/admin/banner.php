
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div style="clear:both;"></div><br>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                 <!-- <form role="form" action="<?php echo base_url('admin/save_banner/').$vn['id'] ?>" method="post" enctype="multipart/form-data">                  -->
                   <form role="form" action="<?php echo base_url('admin/save_banner') ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
              <label for="exampleInputEmail1">Title-1</label>
              <input type="text" class="form-control" name="title1" id="exampleInputEmail1" placeholder="Enter Title-1"  >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Title-2</label>
              <input type="text" class="form-control" name="title2" id="exampleInputEmail1" placeholder="Enter Title-2" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Button Title</label>
              <input type="text" class="form-control" name="b_title" id="exampleInputEmail1" placeholder="Enter Button Title" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Button Link</label>
              <input type="text" class="form-control" name="b_link" id="exampleInputEmail1" placeholder="Enter Button Link" >
            </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="exampleInputFile" name="files[]" multiple>

                            <p class="help-block">Upload an image for the banner of this site</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit"  class="btn white m-b">Save Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>