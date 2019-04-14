<?php include(dirname(__DIR__).'/views/templates/login_header.php'); ?>

<h1 class="text-center">Registeration</h1>
<div class="card col-md-4  col-md-offset-4 col-sm-8 col-sm-offset-2 col-10 col-offset-1 card-container" style="width: 600px; margin-left: 26%;">
  <form class="form-signin" id="registerForm" method="post" action="<?php echo base_url(); ?>Account/Register">
    <input type="text" id="name" placeholder="UserName"  class="form-control" name="Name">
    <input type="text" id="email" placeholder="Email"  class="form-control" name="Email">
    <input type="password"  id="password"  placeholder="Password" class="form-control" name="Password" >
    <input type="number" id="phone" placeholder="phone-Number"  class="form-control" name="Phone" >
    <label>Security Question </label>
    <select name="SecurityQuestion" class="custom-select form-control">
      <option value="1" class="form-control">Who was your childhood hero? </option>
      <option value="2">What was the last name of your third grade teacher?</option>
      <option value="3">What is the first name of the person you first loved ?</option>
      <option value="4">What is the last name of the teacher who gave you your first failing grade?</option>
      <option value="5">When you were young, what did you want to be when you grew up?</option>
      <option value="6">What is the job you want?</option>
    </select>
    <label>Answer </label>
    <input type="text"  id="answer" class="form-control" name="SecurityAnswer">
    <input type="submit" name="submit" value="Register" class="btn btn-lg btn-primary btn-block btn-signin"/>
  <form>
</div>

<?php include(dirname(__DIR__).'/views/templates/footer.php'); ?>
