<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Funding Team</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Edit Profile</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">

          <form role="form" method="post" action="<?php echo base_url('admin/update_funding_team')?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="<?php echo $team[0]['name'];?>" placeholder="Enter Name">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $team[0]['id'];?>">
            </div>
            <div class="form-group">
              <label for="desig">Designation</label>
              <input type="text" class="form-control" name="desig" id="desig" value="<?php echo $team[0]['designation'];?>" placeholder="Enter Designation">
            </div>
            <h6><b>Social Profile Links</b></h6>
            <hr>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Facebook</div>
                <input class="form-control" type="text" name="fb_link" value="<?php echo $team[0]['fb_link'];?>" placeholder="https://" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Twitter</div>
                <input class="form-control" type="text" name="tw_link" value="<?php echo $team[0]['tw_link'];?>" placeholder="https://" >
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Linkedin</div>
                <input class="form-control" type="text" name="ln_link" value="<?php echo $team[0]['ln_link'];?>" placeholder="https://">
              </div>
            </div>
          <div class="form-group">
            <label for="team_image">Image</label>
            <input type="file" name="team_image" id="team_image" class="form-control">
            <!-- <p class="help-block">Upload Client image.</p> -->
            <?php if (isset($team[0]['image'])) {
                ?><img src="<?php echo base_url() . 'uploads/banner/' . $team[0]['image']; ?>" width="10%"><?php }
            ?>
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


</body>
</html>
