<section class="login-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 col-md-7 mx-auto login-form">
              <div class="form-section">
                  <h4 class="">Team<span>X</span></h4>
                  <h3 class="h3">Login</h3>
                  <form method="POST">
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                      <div class="icon-form">
                          <input type="email" name="email" class="form-control" placeholder="Enter an email " required>
                          <i class="fas fa-envelope"></i>
                      </div>
                      <div class="icon-form">
                          <input type="password" name="pwd" class="form-control" placeholder="Enter an password" required>
                          <i class="fas fa-key"></i>
                      </div>
                      <button type="submit" name="sbmt_login" class="btn btn-theme"  type="button" >Sign in</button>
                  </form>
                  <p class="mt-4">Create a new account <a href="signup" class="signup-link">Sign up <span>👋</span>  </a></p>
              </div>
          </div>
      </div>
  </div>
</section>