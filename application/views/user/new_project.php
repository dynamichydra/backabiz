<main>
  <?php $this->load->view('include/small_banner');?>
  <!-- Form Section start-->
    <section class="project-form-wrapper section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="project-form-content">
                <form type="post" method="post" action="dashboard/save_project" id="project-form1" enctype="multipart/form-data">
                  <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" id="title" value="" class="form-control">
          <small>Put the project title here</small>
      </div>
      <div class="form-group">
          <label>Description</label>
          <textarea id="description" name="description" rows="10" cols="80"></textarea>
      </div>
      <div class="form-group">
          <label>Short Description</label>
          <textarea id="short_description" name="short_description" rows="10" cols="80"></textarea>
      </div>
      <div class="form-group">
          <label>Category</label>
          <select name="category[]" multiple>
            <option value="uncategorized">Uncategorized</option>
            <?php
              foreach($category as $k=>$v){
                ?>
                <option value="<?php echo $v['cat_name']?>"><?php echo $v['cat_name']?></option>
                <?php
              }
            ?>
          </select>
          <small>Select your project category</small>
      </div>
      <div class="form-group">
          <label>Tag</label>
          <input type="text" name="tag" id="tag"  placeholder="Tag" value="" class="form-control">
          <small>Separate tags with commas eg: tag1,tag2</small>
      </div>
        <div class="form-group">
          <label>Feature Image</label>
          <input type="file" name="feature_img" id="feature_img" class="form-control">
          <small>Upload a project feature image</small>
      </div>
      <div class="form-group">
          <label>Video</label>
          <input type="text" name="video" id="video" placeholder="https://" value="" class="form-control">
          <small>Put the project video URL here</small>
      </div>
      <div class="form-group">
          <label>Project End Method</label>
          <select name="form-type" name="emethod">
            <option value="target_goal">Target Goal</option>
            <option value="target_date">Target Date</option>
            <option value="target_goal_and_date">Target Goal &amp; Date</option>
            <option value="never_end">Project Never Ends</option>
          </select>
          <small>Choose the stage when project will end</small>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>Start Date</label>
            <input type="date" name="start_date" id="start_date" placeholder="" value="" class="form-control">
            <small>Project start date (dd-mm-yy)</small>
        </div>
        <div class="col-md-6">
          <label>End Date</label>
            <input type="date" name="end_date" id="end_date" placeholder="" value="" class="form-control">
            <small>Project end date (dd-mm-yy)</small>
        </div>

      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>Minimum Amount</label>
            <input type="number" name="min_amount" id="min_amount" value="" class="form-control">
            <small>Minimum project funding amount</small>
        </div>
        <div class="col-md-6">
          <label>Maximum Amount</label>
            <input type="number" name="max_amount" id="max_amount" value="" class="form-control">
            <small>Maximum project funding amount</small>
        </div>
      </div>
      <div class="form-group">
          <label>Funding Goal</label>
          <input type="number" name="funding_goal" id="funding_goal" value="" class="form-control">
          <small>Project funding goal</small>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>Recommended Amount</label>
            <input type="number" name="rec_amount" id="rec_amount" value="" class="form-control">
            <small>Recommended project funding amount</small>
        </div>
        <div class="col-md-6">
          <label>Predefined Pledge Amount</label>
            <input type="text" name="pledge_amount" id="pledge_amount" value="" class="form-control">
            <small>Predefined amount allow you to place the amount in donate box by click, price should separated by comma (,), example: <code>10,20,30,40</code></small>
        </div>
      </div>
      <div class="form-group">
          <label>Contributor Table</label>
          <div class="checkbox-wrap"><input type="checkbox" name="contributor_table" value="1">Show contributor table on project single page</div>

      </div>
      <div class="form-group">
          <label>Contributor Anonymity</label>
          <div class="checkbox-wrap"><input type="checkbox" name="contributor_anonymity" value="1">Make contributors anonymous on the contributor table</div>

      </div>
      <div class="form-group">
          <label>Country</label>
          <select name="country">
            <option selected="selected" value="0">Select a country</option>
            <?php
              foreach ($country as $k=>$v) {
                  echo "<option value='" . $v['id'] . "'>" . $v['country_name'] . "</option>";
              }
              ?>
            </select>
          <small>Select your country</small>
      </div>
      <div class="form-group">
          <label>Location</label>
          <input type="text" name="location" id="location" value="" class="form-control">
          <small>Put the project location here</small>
      </div>
      <br>
      <h3 class="reward-option">Reward Option</h3>
      <div class="form-group">
          <label>Pledge Amount</label>
          <input type="text" name="reward_p_amount" id="reward_p_amount" value="" class="form-control">
          <small>Pledge Amount</small>
      </div>
      <div class="form-group">
          <label>Reward Image</label>
          <input type="file" name="reward_img" id="reward_img" class="form-control">
          <small>Upload a reward image</small>
      </div>
      <div class="form-group">
          <label>Reward</label>
          <textarea cols="20" rows="2" name="reward_desc" id="reward_desc" class="form-control"></textarea>
          <small>Reward Description</small>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>Estimated Delivery Month</label>
            <select class="form-control" name="del_month">
              <option selected="selected" value="">- Select -</option>
              <option value="jan">January</option>
              <option value="feb">February</option>
              <option value="mar">March</option><option value="apr">April</option>
              <option value="may">May</option><option value="jun">June</option>
              <option value="jul">July</option><option value="aug">August</option>
              <option value="sep">September</option><option value="oct">October</option>
              <option value="nov">November</option><option value="dec">December</option></select>
            <small>Estimated Delivery Month of the Reward</small>
        </div>
        <div class="col-md-6">
          <label>Estimated Delivery Year</label>
            <select class="form-control" name="del_year"><option selected="selected" value="">- Select -</option>
              <?php
              for($i= date('Y');$i<date('Y')+30;$i++){
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
              }
              ?>
              </select>
            <small>Estimated Delivery Year of the Reward</small>
        </div>
      </div>
      <div class="form-group">
          <label>Quantity</label>
          <input type="text" name="quantity" id="quantity" class="form-control">
          <small>Quantity of physical products</small>
      </div>
      <span class="border-line"></span>
      <div class="form-group">
          <div class="checkbox-wrap"><input type="checkbox" name="agree" value="agree">I agree with the terms and conditions.</div>
      </div>
      <div class="form-group submit-wrap">
          <input type="submit" class="submit" value="Submit Project">
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
