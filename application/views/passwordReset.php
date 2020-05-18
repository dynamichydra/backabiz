<!-- body content start -->
<main>
 <!-- Breadcrumbs -->
   <?php $this->load->view('include/small_banner');?>
<!-- end breadcrumbs-sec -->
   <?php if ($this->session->flashdata('success')) { ?>
   <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
   <?php } ?>
   <?php if ($this->session->flashdata('error')) { ?>
   <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
   <?php } ?>
 <!-- Form Section start-->
   <section class="project-form-wrapper section-padding">
     <div class="container">

       <div class="row">
         <div class="project-form-content">
             <form type="post" method="post" action="<?php echo base_url('home/submit_lost_password')?>">
             <div class="col-md-12 col-sm-12">
               <!-- <h3 class="reward-option" style="font-size: 26px; border-bottom: none;margin-top: 0;margin-left: 80px">Forgot Password:-</h3> -->
               <div class="all-form">
                 <div class="form-group">
                     <label>Registered Email address *</label>
                     <input type="email" name="email" value="" class="form-control" required>
                 </div>
                <p class="p17">A password reset link will be sent to your email address.</p>
                <!-- <p style="font-size: 14px;">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="green" target="_blank">privacy policy</a>.</p> -->
                <button type="submit" class="submit" name="register" value="register">Send</button>
               </div>
             </div>


         </form>
         </div>
       </div>

     </div>
   </section>
</main>
