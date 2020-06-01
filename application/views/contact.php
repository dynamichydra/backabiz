<!-- body content start -->
       <main>
         <!-- Breadcrumbs -->
         <?php $this->load->view('include/small_banner');?>
           <!-- end breadcrumbs-sec -->


           <?php if ($this->session->flashdata('success')): ?>
                           <script>
                               swal({
                                   title: "Message Sent",
                                   text: "<?php echo $this->session->flashdata('success'); ?>",
                                   // timer: 1500,
                                   icon: "success",
                                   showConfirmButton: false,
                                   button: "Aww yiss!",
                                   type: 'success'
                               });
                           </script>
                   <?php endif; ?>
                   <?php if ($this->session->flashdata('error')): ?>
                                   <script>
                                       swal({
                                           title: "Error!",
                                           text: "<?php echo $this->session->flashdata('error'); ?>",
                                           dangerMode: true,
                                           // timer: 1500,
                                           icon: "warning",
                                           showConfirmButton: false,
                                           button: "OK",
                                           type: 'error'
                                       });
                                   </script>
                           <?php endif; ?>
         <!-- Map -->

         <!-- Form Section -->
           <section class="form-div site-gap">
             <div class="container">
               <div class="row">
                 <div class="col-md-4">
                   <div class="contact-with-us">
                     <h2><?php echo $contact[0]['title'];?></h2>
                     <p class="sub-h">
                       <?php echo $contact[0]['subtitle'];?>
                     </p>
                     <p class="gry-p">
                       <?php echo $contact[0]['ph_title'];?>
                     </p>
                     <p class="green-p">
                       <?php echo $contact[0]['p_1'];?><?php if(isset($contact[0]['p_2'])){?><br>
                           <?php echo $contact[0]['p_2'];?>
                         <?php
                       }
                       ?><?php if(isset($contact[0]['p_3'])){?><br>
                           <?php echo $contact[0]['p_3'];?>
                         <?php
                       }
                       ?><?php if(isset($contact[0]['p_4'])){?><br>
                           <?php echo $contact[0]['p_4'];?>
                         <?php
                       }
                       ?>
                     </p>

                     <p class="gry-p">
                       <?php echo $contact[0]['email_title'];?>
                     </p>
                     <p class="green-p">
                       <?php echo $contact[0]['e_address_1'];?><?php if(isset($contact[0]['e_address_2'])){?><br>
                           <?php echo $contact[0]['e_address_2'];?>
                         <?php
                       }
                       ?>
                     </p>
                   </div>
                 </div>
                 <div class="col-md-8">
                   <div class="form-div">
                      <form method="post" action="<?php echo base_url('home/contact_mail')?>">
                         <input type="text" name="name" value="<?php if(isset($_SESSION['user']['first_name'])) echo $_SESSION['user']['first_name'];?>" class="form-control fl-left" placeholder="Your Name">
                         <?php
                          if(!empty($_SESSION['user'])){
                           ?>
                           <input type="hidden" name="id" value=<?php echo $_SESSION['user']['id']?>>
                         <?php } ?>
                         <input type="text" name="email" value="<?php if(isset($_SESSION['user']['email'])) echo $_SESSION['user']['email']?>" class="form-control fl-right" placeholder="Your Email">
                         <input type="text" name="subject"  class="form-control fl-left" placeholder="Your Subject">
                         <input type="text" name="phone" value="<?php if(isset($_SESSION['user']['phone'])) echo $_SESSION['user']['phone']?>" class="form-control fl-right" placeholder="Your Phone Number">
                         <textarea name="message" placeholder="Your Message"></textarea>
                         <button type="submit" class="site-btn">Send Message</button>
                     </form>
                   </div>
                 </div>
               </div>
               <div class="pd-40"></div>
             </div>
           </section>
       </main>
