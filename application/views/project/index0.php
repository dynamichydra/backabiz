  <!-- body content start -->
  <main>
    <?php $this->load->view('include/small_banner');?>
    <section id="project-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="project-image-container">
                    <a href="#">
                      <img src="<?php echo base_url('uploads/project/'.$project->feature_img);?>" alt="<?php echo $project->title;?>" class="img-responsive">
                    </a>
                    <div class="project-love">
                      <a href="#"><i class="fa fa-heart-o"></i></a>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="project-details">
                  <h2 class="productauthor__title"><a href="javascript:void(0);"><?php echo $project->title;?></a></h2>
                  <div class="author-single-container">
                    <div class="author-avatar"><a href="<?php echo base_url('profile/'.$project->user_id);?>">
                      <?php
                      if($project->uimg && file_exist('uploads/user/'.$project->uimg)){
                        ?>
                        <img src="<?php echo base_url('uploads/user/'.$project->uimg);?>" alt="<?php echo $project->uname;?>"> </a>
                        <?php
                      }else{
                        ?>
                        <img src="<?php echo base_url('assets/frontend/assets/images/profile-image.jpg');?>" alt="<?php echo $project->uname;?>"> </a>
                        <?php
                      }
                      ?>

                    </div>
                    <div class="author-single-details">
                      <p class="author-byline">by <a href="<?php echo base_url('profile/'.$project->user_id);?>"><?php echo $project->uname;?></a></p>
                      <p style="font-size: 13px;"><?php echo $pcount[0]['tot']?> Campaigns Created<span>|</span><?php echo $project->address;?>	</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                    <div class="raised-bar">
                      <div class="neo-progressbar"><div style="width:<?php echo ($project->rec_amount/$project->funding_goal)*100;?>%"></div></div>
                    </div>
                    <div class="progression-studios-raised-percent"><?php echo number_format(($project->rec_amount/$project->funding_goal)*100,2)?>%</div>
                    <div class="progression-studios-fund-raised">$<?php echo number_format($project->rec_amount);?></div>
                    <div class="progression-studios-funding-goal">raised of $<?php echo number_format($project->funding_goal);?> goal</div>
                    <div class="progression-studios-index-time-remaining">
                      <ul>
                        <?php
                        $cat = explode(',',$project->category);
                        foreach($cat as $v){
                          ?>
                          <li><i class="fa fa-folder-open"></i> <a href="#"><?php echo $v;?></a></li>
                          <?php
                        }
                        ?>

                        <li><i class="fa fa-user"></i> <?php echo count($backers);?> Backers</li>
                        <?php
                        $date1=date_create($project->end_date);
                        $data=date("Y/m/d");
                        $date2=date_create($data);
                        $diff=date_diff($date1,$date2);
                        $result=$diff->format("%a");
                        ?>
                        <li><i class="fa fa-clock-o"></i> <?php echo $result;?> Days to go</li>
                      </ul>
                    </div>
                    <div>
                      <form method="post" class="cart" id="project-display">
            $  <input type="number" step="any" min="0" placeholder="100" name="donate_amount_field" class="input-text amount wpneo_donate_amount_field text" value="100" data-min-price="50" data-max-price="45000">
                  <button type="submit" class="submit">Back Campaign</button>
                </form>
                    </div>
                    <ul id="blog-single-social-sharing">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12" id="project-view">
                <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#project-tab1">Project Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#project-tab2">Updates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#project-tab3">Backer List</a>
          </li>
      </ul>
      <div class="tab-content">
          <div id="project-tab1" class="row tab-pane active"><br>
              <div class="col-md-8">
                <div class="project-text-area">
                  <?php echo $project->description;?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="story-right">
                  <h2>Rewards</h2>
                  <h3> <span>$<?php echo number_format($project->reward_p_amount);?></span> or more </h3>
                  <?php echo $project->reward_desc;?>
                  <h4><?php echo ucfirst($project->del_month);?>, <?php echo $project->del_year;?></h4>
                  <p>Estimated Delivery</p>
                            <ul>
                              <li><i class="fa fa-user"></i> 1 backers</li>
                              <li><i class="fa fa-certificate"></i> 9 rewards left</li>
                            </ul>
                        <button type="submit" class="submit">Select Reward</button>
                </div>
              </div>
          </div>
          <div id="project-tab2" class="row tab-pane fade"><br>
            <div class="col-md-12">
              <ul class="update-list">
              <li>
                <span class="round-circle"></span>
                <h4>20-07-2020</h4>
                <p class="update-title">July Update Example</p>
                <p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </li>
              <li>
                <span class="round-circle"></span>
                <h4>25-08-2020</h4>
                <p class="update-title">August Update Example</p>
                <p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </li>
              <li>
                <span class="round-circle"></span>
                <h4>01-01-2021</h4>
                <p class="update-title">New Year Update Example</p>
                <p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </li>
            </ul>
            </div>
          </div>
          <div id="project-tab3" class="row tab-pane fade"><br>
            <div id="baker_list" class="table-responsive col-md-12" style="display: block;">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>Name</th>
                  <th>Donate Amount</th>
                  <th>Date</th>
                </tr>
                <?php
                foreach($backers as $k=>$v){
                  ?>
                  <tr>
                    <td><?php echo $v->name;?></td>
                    <td> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php number_format($v->amount);?></span>
                    </td>
                    <td><?php echo date('M d, Y',strtotime($v->date));?></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          </div>
      </div>


              </div>
            </div>
        </div>
    </section>

  </main>
