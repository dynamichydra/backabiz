<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Contact Us</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Contact Us</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/Insert_contact_us')?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" value="<?php if (isset($feature[0]['title'])) { echo $feature[0]['title'];}
                        ?>" placeholder="Enter Title" value="">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php if (isset($feature[0]['id'])) { echo $feature[0]['id'];}
                                  ?>" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
              <label for="s_title">Sub Title</label>
              <input type="text" class="form-control" name="s_title" id="s_title" value="<?php if (isset($feature[0]['subtitle'])) { echo $feature[0]['subtitle'];}
                        ?>" placeholder="Enter Sub Title" value="">
            </div>
            <div class="form-group">
              <label for="ph_title">Phone Title</label>
              <input type="text" class="form-control" name="ph_title" id="ph_title" value="<?php if (isset($feature[0]['ph_title'])) { echo $feature[0]['ph_title'];}
                        ?>" placeholder="Enter Phone Title" value="">
            </div>
            <div class="form-group">
              <label for="points">Phone Numbers</label>
              <input type="text" class="form-control" name="p_1" id="p_1" value="<?php if (isset($feature[0]['p_1'])) { echo $feature[0]['p_1'];}
                        ?>" placeholder="Enter phone1">
              <input type="text" class="form-control" name="p_2" id="p_2" value="<?php if (isset($feature[0]['p_2'])) { echo $feature[0]['p_2'];}
                        ?>" placeholder="Enter phone2">
              <input type="text" class="form-control" name="p_3" id="p_3" value="<?php if (isset($feature[0]['p_3'])) { echo $feature[0]['p_3'];}
                        ?>" placeholder="Enter phone3">
              <input type="text" class="form-control" name="p_4" id="p_4" value="<?php if (isset($feature[0]['p_4'])) { echo $feature[0]['p_4'];}
                        ?>" placeholder="Enter phone4">
            </div>
            <div class="form-group">
              <label for="email_title">Email Title</label>
              <input type="text" class="form-control" name="email_title" id="email_title" value="<?php if (isset($feature[0]['email_title'])) { echo $feature[0]['email_title'];}
                        ?>" placeholder="Enter Email Title">
            </div>
            <!-- <div class="form-group">
              <label for="e_address">Email address</label>
              <input type="text" name="e_address" id="e_address" class="form-control" placeholder="Enter Email address">
            </div> -->
            <div class="form-group">
              <label for="e_address">Email address</label>
              <input type="text" class="form-control" name="e_address_1" id="e_address_1" value="<?php if (isset($feature[0]['e_address_1'])) { echo $feature[0]['e_address_1'];}
                        ?>" placeholder="Enter Email">
              <input type="text" class="form-control" name="e_address_2" id="e_address_2" value="<?php if (isset($feature[0]['e_address_2'])) { echo $feature[0]['e_address_2'];}
                        ?>" placeholder="Enter Email">
            <button type="submit"  class="btn white m-b">Submit</button><br>
          </div>
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
