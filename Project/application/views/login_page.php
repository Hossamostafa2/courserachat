<?php include(dirname(__DIR__).'/views/templates/login_header.php'); ?>

<div class="card col-md-4  col-md-offset-4 col-sm-8 col-sm-offset-2 col-10 col-offset-1 card-container">
  <img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>assets/images/avatar_2x.png" />
  <p style="text-align: center"><?php echo($err) ?></p>
  <form class="form-signin" id="loginForm" method="post" action="<?php echo base_url(); ?>Account/Login">
    <input type="email" id="Email" placeholder="Email" name="Email" class="form-control" >
    <input type="password"  id="password" placeholder="Password" name="Password" class="form-control" >
    <div class="form-check remember form-group has-success">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="checkboxSuccess" name="CheckboxSuccess" value="1">
          Remmeber Me
        </label>
    </div>
    <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block btn-signin" />
  <form>
  <div class="tool row">
    <a href="<?php echo base_url(); ?>Account/ForgotPassword" class="col-6 forgot-password">
      <small>
        Forgot password?
      </small>
    </a>
    <small class="col-6  sign-up" style="float:right">
      New User ?
      <a href="<?php echo base_url(); ?>Account/Register"  class="forgot-password">
      Sign-up</a>
    </small>
  </div>
</div>

<?php include(dirname(__DIR__).'/views/templates/footer.php'); ?>
