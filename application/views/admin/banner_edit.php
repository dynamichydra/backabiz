
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div style="clear:both;"></div><br>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                    foreach ($banner_img as $key=>$vn) { 
                        ?>
                 <form role="form" action="<?php echo base_url('admin/save_banner/').$vn['id'] ?>" method="post" enctype="multipart/form-data">                 
                   <!-- <form role="form" action="<?php echo base_url('admin/save_banner') ?>" method="post" enctype="multipart/form-data"> -->
                    <div class="box-body">
                        <div class="form-group">
              <label for="exampleInputEmail1">Title-1</label>
              <?php
                     if (isset($vn['title_one'])) {
                        ?>
              <input type="text" class="form-control" name="title1" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $vn['title_one'];?>" >
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Title-2</label>
              <?php
                     if (isset($vn['title_two'])) {
                        ?>
              <input type="text" class="form-control" name="title2" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $vn['title_two'];?>" >
          <?php } ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Button Title</label>
              <?php
                     if (isset($vn['button_title'])) {
                        ?>
              <input type="text" class="form-control" name="b_title" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $vn['button_title'];?>" >
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Button Link</label>
              <?php
                     if (isset($vn['button_link'])) {
                        ?>
              <input type="text" class="form-control" name="b_link" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $vn['button_link'];?>">
              <?php } ?>
            </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="exampleInputFile" name="files[]" multiple>

                            <p class="help-block">Upload an image for the banner of this site</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit"  class="btn btn-info pull-right">Save Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Last uploaded banner :</label><br>
                <div style="width:100%; padding: 3%; background-color: #fff;">

                    <!-- <?php print_r($banner_img);
                    ?> -->

                        <?php
                     if (isset($vn['image'])) {
                      $img=explode(",",$vn['image']);
                      // print_r($img);
                      // die;
                      foreach ($img as $vn) { 
                        ?>
                    <img src="<?php echo base_url() . 'uploads/banner/' . $vn; ?>" width="100%"><?php }
}
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>