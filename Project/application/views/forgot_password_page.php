<?php include(dirname(__DIR__).'/views/templates/login_header.php'); ?>

<body style="color: #404040; background: #0ca3d2;  ">
  <center>
    <div class="form-gap" style="padding-top:70px"></div>
      <div class="container">
      	<div class="row">
      		<div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default" style="width:550px;">
              <div class="panel-body" >
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                      <div class="form-group">
                        <div class="input-group" style="margin-bottom: 15px;">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                        <div class="input-group" style="margin-bottom: 15px;">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-phone color-blue"></i></span>
                          <input id="phone" name="phone" placeholder="Phone-Number" class="form-control"  type="number">
                        </div>
                        <label>Security Question </label>
                        <select name="custom-select form-control">
                            <option value="">Who was your childhood hero? </option>
                            <option value="">What was the last name of your third grade teacher?</option>
                            <option value="">What is the first name of the person you first loved ?</option>
                            <option value="">What is the last name of the teacher who gave you your first failing grade?</option>
                            <option value="">When you were young, what did you want to be when you grew up?</option>
                            <option value="">What was your childhood nickname?</option>
                        </select>
                        <label>Your Answer</label>
                        <div class="input-group" style="margin-bottom: 15px;">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-ok-sign color-blue"></i></span>
                          <input id="Answer" name="Answer" class="form-control"  type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      <input type="hidden" class="hide" name="token" id="token" value="">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
       </div>
   </center>
</body>

<?php include(dirname(__DIR__).'/views/templates/footer.php'); ?>
