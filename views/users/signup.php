<section class="login-section">
 
 <div class="container">
     <div class="row">
         <div class="col-lg-5 col-md-7 mx-auto login-form">
             <div class="form-section">
                 <h4 class="">Team<span>X</span></h4>
                 <h3 class="h3">Signup</h3>
                 <form method="POST">
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                     <div class="icon-form">
                         <input name="fname" type="text" title="Only Alphabets are allowed" pattern="[a-zA-Z]{3,15}" class="form-control" placeholder="Enter an First Name " required>
                         <i class="fas fa-user"></i>
                     </div>
                     <div class="icon-form">
                         <input name="lname" type="text" title="Only Alphabets are allowed" pattern="[a-zA-Z]{3,15}" class="form-control" placeholder="Enter an Last Name " required>
                         <i class="fas fa-users"></i>
                     </div>
                     <div class="icon-form">
                         <input name="email" type="email" class="form-control" placeholder="Enter an email " required>
                         <i class="fas fa-envelope"></i>
                     </div>
                     <div class="icon-form">
                         <input name="pwd" type="password" title="Must be atleast 5 character long" pattern="{5,15}" class="form-control" placeholder="Enter an password" required>
                         <i class="fas fa-key"></i>
                     </div>
                     <?php if(isset($_GET["msg"])){ ?>
                     <center><small class="text-center text-success">Account Created</small></center>
                     <?php }?>
                     <button name="submit" class="btn btn-theme" type="submit">Sign up</button>
                 </form>
                 <p class="mt-4">Already have an account ? <a href="login" class="signup-link">Log In <span>👋</span>  </a></p>
             </div>
         </div>
     </div>
 </div>
</section>