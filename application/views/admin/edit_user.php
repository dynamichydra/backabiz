<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Users</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>New User Form</h2>
                    <?php
                    foreach ($user_data as $key=>$vn) { 
                        ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" action="<?php echo base_url('admin/update_user')?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $vn['name'];?>">
              <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $vn['id'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $vn['email'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone</label>
              <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter phone no." value="<?php echo $vn['phone'];?>">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div> -->
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
            <button type="submit"  class="btn white m-b">Update</button>
          </form>
          <?php

                    }
                    ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

</body>
</html>
