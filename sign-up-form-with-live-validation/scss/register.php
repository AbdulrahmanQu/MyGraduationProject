<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Off-Line Handwritten Digits Recognition Using Machine Learning</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>
	<div class="content">
	<div class="box">
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<p>
			<label class="floatLabel">Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input type="password" name="password_1">
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm password</label>
			<input type="password" name="password_2">
		</p>
		<p>
			<button type="submit" class="btn" name="reg_user">Register</button>
		</p>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>
</div>
</body>
</html>