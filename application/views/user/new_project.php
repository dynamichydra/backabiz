<main>
  <?php $this->load->view('include/small_banner');?>
  <!-- Form Section start-->
    <section class="project-form-wrapper section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="project-form-content">
              <?php if( !empty($project[0]["id"])){
                ?>
                <form type="post" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" action="<?php echo base_url('dashboard/update_project/').$project[0]['id']?>" id="project-form1" enctype="multipart/form-data">
                  <?php
                }else{
                  ?>
                    <form type="post" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" action="<?php echo base_url('dashboard/save_project')?>" id="project-form1" enctype="multipart/form-data">
                      <?php
                    }
                    ?>
                  <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" id="title" value="<?php if (!empty($project[0]["title"])) { echo $project[0]["title"];} ?>" class="form-control" required>
          <small>Put the campaign title here</small>
      </div>
      <div class="form-group">
          <label>Description</label>
          <textarea id="editor1" name="description" rows="10" cols="80" required><?php if (!empty($project[0]["description"])) { echo $project[0]["description"];} ?></textarea>
      </div>
      <div class="form-group">
          <label>Short Description</label>
          <textarea id="editor2" name="short_description" rows="10" cols="80" required ><?php if (!empty($project[0]["short_description"])) { echo $project[0]["short_description"];} ?></textarea>
      </div>
      <!-- <div class="form-group">
          <label>Category</label>
          <select name="category[]" style="height:500px;" required multiple>
            <option value="uncategorized">Uncategorized</option>


            <?php
                          foreach ($category as $key=>$value) {?>
                            <option value="<?php echo $value['cat_name']; ?>" <?php  if(isset($project[0]["category"]) && $project[0]["category"] == $value['cat_name'])  echo 'selected'; ?>>
<?php echo $value['cat_name']; ?>
</option><?php
                          }
                          ?>
          </select>
          <small>Select your project category</small>
      </div> -->

      <div class="form-group">
      <label class="col-sm-2 form-control-label">Category:- </label>
      <div class="col-sm-10">
        <label class="checkbox-inline">
          <?php
                        foreach ($category as $key=>$value) {?>
          <input type="checkbox" name="category[]" value="<?php echo $value['cat_name']; ?>" <?php  if(isset($project[0]["category"]) && $project[0]["category"] == $value['cat_name'])  echo 'checked'; ?>> <?php echo $value['cat_name']; ?> &nbsp; &nbsp; &nbsp; &nbsp;
          <?php
                                    }
                                    ?>
        </label>
      </div>
    </div>


      <div class="form-group">
          <label>Tag</label>
          <input type="text" name="tag" id="tag"  placeholder="Tag" value="<?php if (!empty($project[0]["tag"])) { echo $project[0]["tag"];} ?>" class="form-control">
          <small>Separate tags with commas eg: tag1,tag2</small>
      </div>
        <div class="form-group">
          <label>Feature Image</label>
          <input type="file" name="files[]" id="feature_img" class="form-control" multiple >
          <small>Upload campaign feature images/ atleast one image is mandatory</small>
          <?php
          if(isset($project[0]['feature_img'])){
          $cats = explode(",", $project[0]['feature_img']);
        }
          ?>
          <?php if(!empty($cats[0])){?>
          <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/project/' . $cats[0]; ?>">Click here to see</a></small>
          <?php
        }
        ?>
      </div>
      <div class="form-group">
          <label>Video</label>
          <input type="text" name="video" id="video" placeholder="https://" value="<?php if (!empty($project[0]["video"])) { echo $project[0]["video"];} ?>" class="form-control">
          <!-- <small>Url should look like:- https://www.youtube.com/watch?v=zQ4gy5eM7OM</small> -->
          <small style="color:red"><b>Copy the video url and paste it here</b> (only youtube videos allowed)</small>
      </div>
      <div class="form-group">
          <label>Campaign End Method</label>
          <select name="emethod" required>
            <option selected="selected" value="">- Select -</option>
            <option value="target_goal" <?php if (isset($project[0]["project_end_method"]) && $project[0]["project_end_method"]=='target_goal') {echo "selected";}?>>Target Goal</option>
            <option value="target_date" <?php if (isset($project[0]["project_end_method"]) && $project[0]["project_end_method"]=='target_date') {echo "selected";}?>>Target Date</option>
            <option value="target_goal_and_date" <?php if (isset($project[0]["project_end_method"]) && $project[0]["project_end_method"]=='target_goal_and_date') {echo "selected";}?>>Target Goal &amp; Date</option>
            <!-- <option value="never_end" <?php if (isset($project[0]["project_end_method"]) && $project[0]["project_end_method"]=='never_end') {echo "selected";}?>>Project Never Ends</option> -->
          </select>
          <small><b style="color:red">Note:-</b> Each Backabiz campaign has a maximum three months duration.</small>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>Start Date</label>
            <!-- <input type="date" name="start_date" id="start_date" placeholder="" value="<?php if (!empty($project[0]["start_date"])) { echo $project[0]["start_date"];} ?>" class="form-control" required> -->
            <input id="date" class="form-control" name="start_date" type="date" value="<?php if (!empty($project[0]["start_date"])) { echo $project[0]["start_date"];} ?>" required/>
            <small>campaign start date (dd-mm-yy)</small>
        </div>
        <div class="col-md-6">
          <label>End Date</label>
            <!-- <input type="date" name="end_date" id="end_date" placeholder="" value="<?php if (!empty($project[0]["end_date"])) { echo $project[0]["end_date"];} ?>" class="form-control" required> -->
            <input id="date" class="form-control" name="end_date" type="date" value="<?php if (!empty($project[0]["end_date"])) { echo $project[0]["end_date"];} ?>" required/>
            <small>campaign end date (dd-mm-yy)</small>
        </div>

      </div>
      <!-- <div class="form-group row">
        <div class="col-md-6">
          <label>Minimum Amount</label>
            <input type="number" name="min_amount" id="min_amount" value="<?php if (!empty($project[0]["min_amount"])) { echo $project[0]["min_amount"];} ?>" class="form-control">
            <small>Minimum project funding amount</small>
        </div>
        <div class="col-md-6">
          <label>Maximum Amount</label>
            <input type="number" name="max_amount" id="max_amount" value="<?php if (!empty($project[0]["max_amount"])) { echo $project[0]["max_amount"];} ?>" class="form-control">
            <small>Maximum project funding amount</small>
        </div>
      </div> -->
      <div class="form-group">
          <label>Funding Goal</label><span>
          <select name="currency" required>
          <?php
                        foreach ($currency as $key=>$value) {?>
          <option type="checkbox" name="currency" value="<?php echo $value['code']; ?>" <?php  if(isset($project[0]["currency"]) && $project[0]["currency"] == $value['code']){  echo 'selected';} elseif('AUD'==$value['code']){ echo 'selected'; } ?>> <?php echo $value['code']; ?>(<?php echo $value['symbol']; ?>)</option>
          <?php
                                    }
                                    ?>
                                  </select>
          <input type="number" name="funding_goal" id="funding_goal" value="<?php if (!empty($project[0]["funding_goal"])) { echo $project[0]["funding_goal"];} ?>" class="form-control" required>
          <small>campaign funding goal</small>
      </div>
      <!-- <div class="form-group row">
        <div class="col-md-6">
          <label>Recommended Amount</label>
            <input type="number" name="rec_amount" id="rec_amount" value="<?php if (!empty($project[0]["rec_amount"])) { echo $project[0]["rec_amount"];} ?>" class="form-control" required>
            <small>Recommended project funding amount</small>
        </div>
        <div class="col-md-6">
          <label>Predefined Pledge Amount</label>
            <input type="text" name="pledge_amount" id="pledge_amount" value="<?php if (!empty($project[0]["pledge_amount"])) { echo $project[0]["pledge_amount"];} ?>" class="form-control" required>
            <small>Predefined amount allow you to place the amount in donate box by click, price should separated by comma (,), example: <code>10,20,30,40</code></small>
        </div>
      </div> -->
      <!-- <div class="form-group">
          <label>Contributor Table</label>
          <div class="checkbox-wrap"><input type="checkbox" name="contributor_table" value="1" <?php if (isset($project[0]["contributor_table"]) && $project[0]["contributor_table"]=='1') {echo "checked";}?>>Show contributor table on project single page</div>

      </div>
      <div class="form-group">
          <label>Contributor Anonymity</label>
          <div class="checkbox-wrap"><input type="checkbox" name="contributor_anonymity" value="1" <?php if (isset($project[0]["contributor_anonymity"]) && $project[0]["contributor_anonymity"]=='1') {echo "checked";}?>>Make contributors anonymous on the contributor table</div>

      </div> -->
      <div class="form-group">
          <label>Country</label>
          <select name="country" required>
            <option selected="selected" value="">Select a country</option>
            <?php
                          foreach ($country as $key=>$value) {?>
                            <option value="<?php echo $value['id']; ?>" <?php  if(isset($project[0]["country"]) && $project[0]["country"] == $value['id']){  echo 'selected';}elseif('13'== $value['id']){echo 'selected';} ?>>
  <?php echo $value['country_name']; ?>
  <?php
                          }
                          ?>
            </select>
          <small>Select your country</small>
      </div>
      <div class="form-group">
          <label>Campaign City Location</label>
          <input type="text" name="location" id="location" value="<?php if (!empty($project[0]["location"])) { echo $project[0]["location"];} ?>" class="form-control" required>
          <small>Put the campaign city location here</small>
      </div>
      <br>

      <label>
                <input type="checkbox" name="colorCheckbox"
                       value="C" <?php  if(isset($project[0]["offer_reward"]) && $project[0]["offer_reward"] == "C")  echo 'checked'; ?>> Are you providing a reward?</label>
      <div class="C selectt"  <?php if(isset($project[0]["offer_reward"]) && $project[0]["offer_reward"] == "C") { echo ' style="display:block" ';}else{echo ' style="display:none;" ';} ?>>
      <h3 class="reward-option">Reward Option</h3>
      <!-- <div class="form-group">
          <label>Pledge Amount</label>
          <input type="text" name="reward_p_amount" id="reward_p_amount" value="<?php if (!empty($project[0]["reward_p_amount"])) { echo $project[0]["reward_p_amount"];} ?>" class="form-control">
          <small>Pledge Amount</small>
      </div> -->
      <div class="form-group">
          <label>Reward Image</label>
          <input type="file" name="reward_img" id="reward_img" class="form-control" >
          <small>Upload a reward image</small>
          <?php if(!empty($project[0]['reward_img'])){?>
          <small>Last uploaded image:- <a target="_blank" href="<?php echo base_url() . 'uploads/project/' . $project[0]['reward_img']; ?>">Click here to see</a></small>
          <?php
        }
        ?>
      </div>
      <div class="form-group">
          <label>Reward</label>
          <textarea cols="20" rows="2" name="reward_desc" id="editor3" class="form-control"><?php if (!empty($project[0]["reward_desc"])) { echo $project[0]["reward_desc"];} ?></textarea>
          <small>Reward Description</small>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>Estimated Delivery Month</label>
            <select class="form-control" name="del_month">
              <option selected="selected" value="">- Select -</option>
              <option value="jan"<?php if ( isset($project[0]["del_month"]) && $project[0]["del_month"]=='jan') {echo "selected";}?>>January</option>
              <option value="feb"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='feb') {echo "selected";}?>>February</option>
              <option value="march"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='march') {echo "selected";}?>>March</option><option value="april"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='april') {echo "selected";}?>>April</option>
              <option value="may"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='may') {echo "selected";}?>>May</option><option value="june"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='june') {echo "selected";}?>>June</option>
              <option value="july"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='july') {echo "selected";}?>>July</option><option value="aug"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='aug') {echo "selected";}?>>August</option>
              <option value="sep"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='sep') {echo "selected";}?>>September</option><option value="oct"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='oct') {echo "selected";}?>>October</option>
              <option value="nov"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='nov') {echo "selected";}?>>November</option><option value="dec"<?php if (isset($project[0]["del_month"]) && $project[0]["del_month"]=='dec') {echo "selected";}?>>December</option>
            </select>
            <small>Estimated Reward Delivery Month</small>
        </div>
        <div class="col-md-6">
          <label>Estimated Delivery Year</label>
            <select class="form-control" name="del_year"><option selected="selected" value="" >- Select -</option>
              <?php
              for($i= date('Y');$i<date('Y')+30;$i++){
                ?>
                <option value="<?php echo $i;?>" <?php  if(isset($project[0]["del_year"]) && $project[0]["del_year"] == $i)  echo 'selected'; ?>><?php echo $i;?></option>
                <?php
              }
              ?>
              </select>
            <small>Estimated Reward Delivery Year</small>
        </div>
      </div>
      <div class="form-group">
          <label>Quantity</label>
          <input type="text" name="quantity" id="quantity" value="<?php if (!empty($project[0]["quantity"])) { echo $project[0]["quantity"];} ?>" class="form-control">
          <small>Quantity of physical products</small>
      </div>
      <span class="border-line"></span>
    </div>

      <div class="form-group">
          <div class="checkbox-wrap"><input type="checkbox" id="agree" name="agree" value="1" <?php if (isset($project[0]["t&c"]) && $project[0]["t&c"]=='1') {echo "checked";}?>>I agree with the <a target="_blank" href='<?php echo base_url('home/terms')?>'>terms and conditions.</a></div>
      </div>
      <div class="form-group submit-wrap">
          <input type="submit" class="submit" value="Submit Campaign">
          <a href="<?php echo base_url('/');?>" type="submit" class="cancel">Cancel</a>
      </div>
          </form>
            </div>
          </div>
        </div>
        <div class="pd-40"></div>
      </div>
    </section>
</main>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.9/datepicker.min.js"></script>
<script>
$(function($) {
   $( "#date" ).datepicker();
 });
</script>

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
<script type="text/javascript">
            $(document).ready(function() {
                $('input[type="checkbox"]').click(function() {
                    var inputValue = $(this).attr("value");
                    $("." + inputValue).toggle();
                });
            });
        </script>
<script>
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.replace( 'editor2' );
  CKEDITOR.replace( 'editor3' );
</script>
<!-- <script type="text/javascript">
$(document).ready(function(){
    if ( $('#date1').prop('type') != 'date' ) $('#date1').datepicker();
});
</script> -->
