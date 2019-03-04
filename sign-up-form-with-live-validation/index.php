<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background: #d3394c;">

  	

<form action="#" method="post">
  <h2>Sign Up</h2>
  		<p>
			<label for="username" class="floatLabel">username</label>
			<input id="Email" name="username" type="text" value="<?php echo $username; ?>">
		</p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="email" type="text" value="<?php echo $email; ?>">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password_1" type="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="password_2" type="password">
			<span>Your passwords do not match</span>
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p>
	</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
