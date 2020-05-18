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
             <form type="post" method="post" action="<?php echo base_url('home/submit_new_password')?>">
             <div class="col-md-12 col-sm-12">
               <!-- <h3 class="reward-option" style="font-size: 26px; border-bottom: none;margin-top: 0;margin-left: 80px">Forgot Password:-</h3> -->
               <div class="all-form">
                 <div class="form-group">
                     <label>Registered Email address:-</label>
                     <input type="email" name="email" value="<?php echo $email;?>" class="form-control" required readonly>
                 </div>
                 <div class="form-group">
                     <label>New Password: </label>
                     <!-- <input type="password" name="new-password" value="" class="form-control"> -->
                     <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="psw" id="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
                     <div id="message">
         <h3>Password must contain the following:</h3>
         <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
         <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
         <p id="number" class="invalid">A <b>number</b></p>
         <p id="length" class="invalid">Minimum <b>8 characters</b></p>
       </div>
                 </div>
                 <div class="form-group">
                     <label>Retype Password: </label>
                     <input type="password" class="form-control" name="c_password" id="c_password" onfocusout="Validate()" placeholder="Password" required>
                 </div>
                <!-- <p class="p17">A password reset link will be sent to your email address.</p -->
                <!-- <p style="font-size: 14px;">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="green" target="_blank">privacy policy</a>.</p> -->
                <button type="submit" class="submit" name="register" value="register">Update Password</button>
               </div>
             </div>


         </form>
         </div>
       </div>

     </div>
   </section>
   <script>
   var myInput = document.getElementById("psw");
   var letter = document.getElementById("letter");
   var capital = document.getElementById("capital");
   var number = document.getElementById("number");
   var length = document.getElementById("length");

   // When the user clicks on the password field, show the message box
   myInput.onfocus = function() {
     document.getElementById("message").style.display = "block";
   }

   // When the user clicks outside of the password field, hide the message box
   myInput.onblur = function() {
     document.getElementById("message").style.display = "none";
   }

   // When the user starts to type something inside the password field
   myInput.onkeyup = function() {
     // Validate lowercase letters
     var lowerCaseLetters = /[a-z]/g;
     if(myInput.value.match(lowerCaseLetters)) {
       letter.classList.remove("invalid");
       letter.classList.add("valid");
     } else {
       letter.classList.remove("valid");
       letter.classList.add("invalid");
     }

     // Validate capital letters
     var upperCaseLetters = /[A-Z]/g;
     if(myInput.value.match(upperCaseLetters)) {
       capital.classList.remove("invalid");
       capital.classList.add("valid");
     } else {
       capital.classList.remove("valid");
       capital.classList.add("invalid");
     }

     // Validate numbers
     var numbers = /[0-9]/g;
     if(myInput.value.match(numbers)) {
       number.classList.remove("invalid");
       number.classList.add("valid");
     } else {
       number.classList.remove("valid");
       number.classList.add("invalid");
     }

     // Validate length
     if(myInput.value.length >= 8) {
       length.classList.remove("invalid");
       length.classList.add("valid");
     } else {
       length.classList.remove("valid");
       length.classList.add("invalid");
     }
   }
   </script>
   <script type="text/javascript">
       function Validate() {
           var password = document.getElementById("psw").value;
           var confirmPassword = document.getElementById("c_password").value;
           if (password != confirmPassword) {
               alert("Passwords do not match.");
               return false;
           }
           return true;
       }
   </script>
</main>
