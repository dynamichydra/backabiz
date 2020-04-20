<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>add user</title>
</head>
<body>
  <div class="app" id="app">
<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>New Project</h2>
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
          <form role="form" method="post" action="<?php echo base_url('admin/insert_project')?>" enctype="multipart/form-data" >
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor1" name="description" rows="10" cols="80"><?php if (!empty($pagecontent["page_content"])) {
    echo $pagecontent["page_content"];
} ?></textarea>
<div class="form-group">
                            <label for="short_description">Short Description</label>
                            <textarea id="editor1" name="short_description" rows="10" cols="80"><?php if (!empty($pagecontent["page_content"])) {
    echo $pagecontent["page_content"];
} ?></textarea>
              <div class="form-group">
              <label for="category">Category</label>
              <!-- <div class="col-sm-10"> -->
                <select name="category" class="form-control c-select" required>
                  <option value="uncategorized">Uncategorized</option>
                  <option value="design">Design</option>
                  <option value="education">Education</option>
                  <option value="film-video">Film & Video</option>
                  <option value="food">Food</option>
                  <option value="games">Games</option>
                  <option value="tech">Tech</option>
                </select>
              <!-- </div> -->
            </div>
                        </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" class="form-control" name="tag" id="tag" placeholder="Enter tag" required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Feature Image</label>
              <input type="file" name=" feature_img" id="exampleInputFile" class="form-control" required>
              <p class="help-block">Upload a project feature image.</p>
            </div>
            <div class="form-group">
              <label for="video">Video</label>
              <input type="text" class="form-control" name="video" id="exampleInputEmail1" placeholder="Enter video link here" required>
            </div>
            <div class="form-group">
              <label for="method">Project End Method</label>
              <!-- <div class="col-sm-10"> -->
                <select name="method" class="form-control c-select" required>
                  <option value="target goal">Target Goal</option>
                  <option value="target date">Target Date</option>
                  <option value="target goal and date">Target Goal & Date</option>
                  <option value="never end">Project Never Ends</option>
                </select>
              <!-- </div> -->
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                  <div class="col-md-6">
                  <label for="date">Start Date</label>
                  <input type="date" class="form-control" name="start_date" id="date" placeholder="Project start Date" required>
                </div>

              <div class="col-md-6">
                <label for="date">End Date</label>
                <input type="date" class="form-control" name="end_date" id="date" placeholder="Project end Date" required>
              </div>
                </div>
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                  <div class="col-md-6">
                  <label for="amount">Minimum Amount</label>
                  <input type="text" class="form-control" name="min_amount" id="amount" placeholder="Project start Data" required>
                </div>

              <div class="col-md-6">
                <label for="amount">Maximum Amount</label>
                <input type="text" class="form-control" name="max_amount" id="amount" placeholder="Project start Data" required>
              </div>
                </div>
            </div>
            <div class="form-group">
              <label for="goal">Funding Goal</label>
              <input type="text" class="form-control" name="funding_goal" id="goal" placeholder="Enter Funding Goal here" required>
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                  <div class="col-md-6">
                  <label for="amount">Recommended Amount</label>
                  <input type="text" class="form-control" name="rec_amount" id="amount" placeholder="Recommended Amount" required>
                </div>

              <div class="col-md-6">
                <label for="amount">Predefined Pledge Amount</label>
                <input type="text" class="form-control" name="pledge_amount" id="amount" placeholder="Predefined Pledge Amount" required>
              </div>
                </div>
            </div>
            <div class="form-group">
              <label for="country">country</label>
              <!-- <div class="col-sm-10"> -->
                <select name="country" class="form-control c-select" required>
                  <option value="">Select Country</option>
                  <?php
                                foreach ($countries as $key=>$city) {
                                    echo "<option value='" . $city['id'] . "'>" . $city['country_name'] . "</option>";
                                }
                                ?>
                </select>
              <!-- </div> -->
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" name="location" id="location" placeholder="Put the project location here" required>
            </div>

            <h3>Reward Option</h3>
            <hr>
            <div class="form-group">
              <label for="reward_p_amount">Pledge Amount</label>
              <input type="text" class="form-control" name="reward_p_amount" id="reward_p_amount" placeholder="Put the Pledge Amount here" required>
            </div>
            <div class="form-group">
              <label for="reward_img">Reward Image</label>
              <input type="file" name=" reward_img" id="reward_img" class="form-control" required>
              <p class="help-block">Upload a reward image.</p>
            </div>
            <div class="form-group">
              <label for="reward_desc">Reward Description</label>
              <input type="text" class="form-control" name="reward_desc" id="reward_desc" placeholder="Put the reward description here" required>
            </div>
            <div class="form-group">
                <div class="formwrapper d-flex">
                    <div class="col-md-6">
                    <label for="month">Estimated Delivery Month</label>
                      <select name="del_month" class="form-control c-select" required>
                        <option value="">Select month</option>
                        <option value="jan">January</option>
                        <option value="feb">February</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="aug">August</option>
                        <option value="sep">September</option>
                        <option value="oct">October</option>
                        <option value="nov">November</option>
                        <option value="dec">December</option>
                      </select>
                    </div>

              <div class="col-md-6">
                <label for="year">Estimated Delivery Year</label>
                <select name="del_year" class="form-control c-select" required>
                        <option value="">Select year</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                      </select>
              </div>
                </div>
            </div>

            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity of physical products" required>
            </div>

            <button type="submit"  class="btn white m-b">Submit Project</button>
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