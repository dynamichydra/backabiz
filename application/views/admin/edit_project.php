<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Projetcs</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Edit Project</h2>
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <?php
                                if (!empty($project)) {
                                    foreach ($project as $key=>$vn) {
                                        ?>
          <form role="form" method="post" action="<?php echo base_url('admin/update_project')?>" enctype="multipart/form-data" >
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="<?php if (!empty($vn["title"])) {
    echo $vn["title"];
} ?>" required>
<input type="hidden" class="form-control" name="id" id="id" placeholder="Enter title" value="<?php if (!empty($vn["id"])) {
    echo $vn["id"];
} ?>">
            </div>
            <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor1" name="description" rows="10" cols="80"><?php if (!empty($vn["description"])) {
    echo $vn["description"];
} ?></textarea>
<div class="form-group">
                            <label for="short_description">Short Description</label>
                            <textarea id="editor1" name="short_description" rows="10" cols="80"><?php if (!empty($vn["short_description"])) {
    echo $vn["short_description"];
} ?></textarea>
              <div class="form-group">
              <label for="category">Category</label>
              <!-- <div class="col-sm-10"> -->
                <select name="category" class="form-control c-select" required>
                  <option value="uncategorized" <?php if ($vn["category"]=='uncategorized') {echo "selected";}?>>Uncategorized</option>
                  <option value="Design" <?php if ($vn["category"]=='Design') {echo "selected";}?>>Design</option>
                  <option value="Education" <?php if ($vn["category"]=='Education') {echo "selected";}?>>Education</option>
                  <option value="Film & Video" <?php if ($vn["category"]=='Film & Video') {echo "selected";}?>>Film & Video</option>
                  <option value="Food" <?php if ($vn["category"]=='Food') {echo "selected";}?>>Food</option>
                  <option value="Games" <?php if ($vn["category"]=='Games') {echo "selected";}?>>Games</option>
                  <option value="Technology" <?php if ($vn["category"]=='Technology') {echo "selected";}?>>Tech</option>
                </select>
              <!-- </div> -->
            </div>
                        </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" class="form-control" name="tag" id="tag" placeholder="Enter tag" value="<?php if (!empty($vn["tag"])) {
    echo $vn["tag"];
} ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Feature Image</label>
              <input type="file" name=" feature_img" id="exampleInputFile" class="form-control">
              <p class="help-block">Upload a project feature image.</p>
            </div>
            <div class="form-group">
              <label for="video">Video</label>
              <input type="text" class="form-control" name="video" id="exampleInputEmail1" placeholder="Enter video link here" value="<?php if (!empty($vn["video"])) {
    echo $vn["video"];
} ?>" required>
            </div>
            <div class="form-group">
              <label for="method">Project End Method</label>
              <!-- <div class="col-sm-10"> -->
                <select name="method" class="form-control c-select" required>
                  <option value="target goal" <?php if ($vn["project_end_method"]=='target goal') {echo "selected";}?>>Target Goal</option>
                  <option value="target date" <?php if ($vn["project_end_method"]=='target date') {echo "selected";}?>>Target Date</option>
                  <option value="target goal and date" <?php if ($vn["project_end_method"]=='target goal and date') {echo "selected";}?>>Target Goal & Date</option>
                  <option value="never end" <?php if ($vn["project_end_method"]=='never end') {echo "selected";}?>>Project Never Ends</option>
                </select>
              <!-- </div> -->
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                  <div class="col-md-6">
                  <label for="date">Start Date</label>
                  <input type="date" class="form-control" name="start_date" id="date" placeholder="Project start Date" value="<?php if (!empty($vn["start_date"])) {
    echo $vn["start_date"];
} ?>" required>
                </div>

              <div class="col-md-6">
                <label for="date">End Date</label>
                <input type="date" class="form-control" name="end_date" id="date" placeholder="Project end Date" value="<?php if (!empty($vn["end_date"])) {
    echo $vn["end_date"];
} ?>" required>
              </div>
                </div>
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                  <div class="col-md-6">
                  <label for="amount">Minimum Amount</label>
                  <input type="text" class="form-control" name="min_amount" id="amount" placeholder="Project start Data" value="<?php if (!empty($vn["min_amount"])) {
    echo $vn["min_amount"];
} ?>" required>
                </div>

              <div class="col-md-6">
                <label for="amount">Maximum Amount</label>
                <input type="text" class="form-control" name="max_amount" id="amount" placeholder="Project start Data" value="<?php if (!empty($vn["max_amount"])) {
    echo $vn["max_amount"];
} ?>" required>
              </div>
                </div>
            </div>
            <div class="form-group">
              <label for="goal">Funding Goal</label>
              <input type="text" class="form-control" name="funding_goal" id="goal" placeholder="Enter Funding Goal here" value="<?php if (!empty($vn["funding_goal"])) {
    echo $vn["funding_goal"];
} ?>" required>
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                  <div class="col-md-6">
                  <label for="amount">Recommended Amount</label>
                  <input type="text" class="form-control" name="rec_amount" id="amount" placeholder="Recommended Amount" value="<?php if (!empty($vn["rec_amount"])) {
    echo $vn["rec_amount"];
} ?>" required>
                </div>

              <div class="col-md-6">
                <label for="amount">Predefined Pledge Amount</label>
                <input type="text" class="form-control" name="pledge_amount" id="amount" placeholder="Predefined Pledge Amount" value="<?php if (!empty($vn["pledge_amount"])) {
    echo $vn["pledge_amount"];
} ?>" required>
              </div>
                </div>
            </div>
            <div class="form-group">
              <label for="country">country</label>
                <select name="country" class="form-control c-select" required>
                  <!-- <option value="">Select Country</option> -->
                  <?php
                                foreach ($countries as $key=>$value) {?>
                                  <option value="<?php echo $value['id']; ?>" <?php  if($vn["country"] == $value['id'])  echo 'selected'; ?>>
<?php echo $value['country_name']; ?>
</option><?php
                                }
                                ?>
                </select>
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" name="location" id="location" placeholder="Put the project location here" value="<?php if (!empty($vn["location"])) {
    echo $vn["location"];
} ?>" required>
            </div>

            <h3>Reward Option</h3>
            <hr>
            <div class="form-group">
              <label for="reward_p_amount">Pledge Amount</label>
              <input type="text" class="form-control" name="reward_p_amount" id="reward_p_amount" placeholder="Put the Pledge Amount here" value="<?php if (!empty($vn["reward_p_amount"])) {
    echo $vn["reward_p_amount"];
} ?>" required>
            </div>
            <div class="form-group">
              <label for="reward_img">Reward Image</label>
              <input type="file" name=" reward_img" id="reward_img" class="form-control">
              <p class="help-block">Upload a reward image.</p>
            </div>

            <!-- <div class="form-group">
              <label for="reward_desc">Reward Description</label>
              <input type="text" class="form-control" name="reward_desc" id="reward_desc" placeholder="Put the reward description here" value="<?php if (!empty($vn["reward_desc"])) {
    echo $vn["reward_desc"];
} ?>" required>
            </div> -->

            <div class="form-group">
                            <label for="reward_desc">Reward Description</label>
                            <textarea id="editor1" name="reward_desc" rows="10" placeholder="Put the reward description here" cols="80"><?php if (!empty($vn["reward_desc"])) {
    echo $vn["reward_desc"];
} ?></textarea>
<div class="form-group">

            <div class="form-group">
                <div class="formwrapper d-flex">
                    <div class="col-md-6">
                    <label for="month">Estimated Delivery Month</label>
                      <select name="del_month" class="form-control c-select" required>
                        <option value="">Select month</option>
                        <option value="jan"  <?php if ($vn["del_month"]=='jan') {echo "selected";}?>>January</option>
                        <option value="feb"  <?php if ($vn["del_month"]=='feb') {echo "selected";}?>>February</option>
                        <option value="march"  <?php if ($vn["del_month"]=='march') {echo "selected";}?>>March</option>
                        <option value="april"  <?php if ($vn["del_month"]=='april') {echo "selected";}?>>April</option>
                        <option value="may"  <?php if ($vn["del_month"]=='may') {echo "selected";}?>>May</option>
                        <option value="june"  <?php if ($vn["del_month"]=='june') {echo "selected";}?>>June</option>
                        <option value="july"  <?php if ($vn["del_month"]=='july') {echo "selected";}?>>July</option>
                        <option value="aug"  <?php if ($vn["del_month"]=='aug') {echo "selected";}?>>August</option>
                        <option value="sep"  <?php if ($vn["del_month"]=='sep') {echo "selected";}?>>September</option>
                        <option value="oct"  <?php if ($vn["del_month"]=='oct') {echo "selected";}?>>October</option>
                        <option value="nov"  <?php if ($vn["del_month"]=='nov') {echo "selected";}?>>November</option>
                        <option value="dec"  <?php if ($vn["del_month"]=='dec') {echo "selected";}?>>December</option>
                      </select>
                    </div>

              <div class="col-md-6">
                <label for="year">Estimated Delivery Year</label>
                <select name="del_year" class="form-control c-select" required>
                        <option value="">Select year</option>
                        <option value="2020" <?php if ($vn["del_year"]=='2020') {echo "selected";}?>>2020</option>
                        <option value="2021" <?php if ($vn["del_year"]=='2021') {echo "selected";}?>>2021</option>
                        <option value="2022" <?php if ($vn["del_year"]=='2022') {echo "selected";}?>>2022</option>

                        <option value="2023" <?php if ($vn["del_year"]=='2023') {echo "selected";}?>>2023</option>
                        <option value="2024" <?php if ($vn["del_year"]=='2024') {echo "selected";}?>>2024</option>
                        <option value="2025" <?php if ($vn["del_year"]=='2025') {echo "selected";}?>>2025</option>
                        <option value="2026" <?php if ($vn["del_year"]=='2026') {echo "selected";}?>>2026</option>
                        <option value="2027" <?php if ($vn["del_year"]=='2027') {echo "selected";}?>>2027</option>
                        <option value="2028" <?php if ($vn["del_year"]=='2028') {echo "selected";}?>>2028</option>
                        <option value="2029" <?php if ($vn["del_year"]=='2029') {echo "selected";}?>>2029</option>
                        <option value="2030" <?php if ($vn["del_year"]=='2030') {echo "selected";}?>>2030</option>
                        <option value="2031" <?php if ($vn["del_year"]=='2031') {echo "selected";}?>>2031</option>
                        <option value="2032" <?php if ($vn["del_year"]=='2032') {echo "selected";}?> >2032</option>
                        <option value="2033" <?php if ($vn["del_year"]=='2033') {echo "selected";}?>>2033</option>
                        <option value="2034" <?php if ($vn["del_year"]=='2034') {echo "selected";}?>>2034</option>
                        <option value="2035" <?php if ($vn["del_year"]=='2035') {echo "selected";}?>>2035</option>
                        <option value="2036" <?php if ($vn["del_year"]=='2036') {echo "selected";}?>>2036</option>
                        <option value="2037" <?php if ($vn["del_year"]=='2037') {echo "selected";}?>>2037</option>
                        <option value="2038" <?php if ($vn["del_year"]=='2038') {echo "selected";}?>>2038</option>
                        <option value="2039" <?php if ($vn["del_year"]=='2039') {echo "selected";}?>>2039</option>
                        <option value="2040" <?php if ($vn["del_year"]=='2040') {echo "selected";}?>>2040</option>
                        <option value="2041" <?php if ($vn["del_year"]=='2041') {echo "selected";}?>>2041</option><option value="2042" <?php if ($vn["del_year"]=='2042') {echo "selected";}?>>2042</option>
                        <option value="2043" <?php if ($vn["del_year"]=='2043') {echo "selected";}?>>2043</option><option value="2044" <?php if ($vn["del_year"]=='2044') {echo "selected";}?>>2044</option>
                        <option value="2045" <?php if ($vn["del_year"]=='2045') {echo "selected";}?>>2045</option><option value="2046" <?php if ($vn["del_year"]=='2046') {echo "selected";}?>>2046</option>
                        <option value="2047" <?php if ($vn["del_year"]=='2047') {echo "selected";}?>>2047</option><option value="2048" <?php if ($vn["del_year"]=='2048') {echo "selected";}?>>2048</option>
                        <option value="2049" <?php if ($vn["del_year"]=='2049') {echo "selected";}?>>2049</option>
                      </select>
              </div>
                </div>
            </div>

            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity of physical products"  value="<?php if (!empty($vn["quantity"])) {
    echo $vn["quantity"];
} ?>" required>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="yes" name="featured_project" <?php if ($vn["featured"]=='yes') {echo "checked";}?>> Featured
              </label>
            </div>
            <?php
        }
           }
                                ?>

            <button type="submit"  class="btn white m-b">Update Project</button>
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
        height: 200,
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
