<?php include('server.php') ?>
<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background-color: #f1e5e6;">

  	
	<div class="header">

	<form method="post" action="register.php">
			<?php include('errors.php'); ?>
  <h2>Sign Up</h2>
  		<div class="input-group">
  		<p>
			<label for="username" class="floatLabel" >username</label>
			<input id="Email" name="username" type="text" required="Please Enter Your username" value="<?php echo $username; ?>">
		</p>
		</div>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="email" type="email" required="Please Enter Your Email" value="<?php echo $email; ?>">
		</p>
		  		<div class="input-group">
		  	<p>suggsted password <?php ?></p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password_1" required="Please Enter Your Password" type="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
	</div>
		  		<div class="input-group">
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="password_2" required="Please Enter the same Password" type="password">
			<span>Your passwords do not match</span>
		</p>
	</div>
    <div class="box">
        <button type="submit" class="btn" name="reg_user"  style="width: 100%">Register</button>
    </div>

    	<p>
			<h3>Already a member?</h3> <a href="login.php">Sign in</a>
		</p>

	</form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
