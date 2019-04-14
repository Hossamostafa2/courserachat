<?php include(dirname(__DIR__).'/views/templates/home_header.php'); ?>

<center>
	<h1>Messaging System</h1>
	<br><br>
	<a href="<?php echo base_url(); ?>Account/Register" >
		<input type="button" value="Register" >
	</a>
	<br><br><br>
	<a href="<?php echo base_url(); ?>Account/Login" >
			<input type="button" value="LogIn" >
	</a>
</center>

<?php include(dirname(__DIR__).'/views/templates/footer.php'); ?>
