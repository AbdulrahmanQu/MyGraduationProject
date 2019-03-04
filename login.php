<?php include('server.php') ?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background-color: #f1e5e6;">

  	
	<div class="header">

	<form method="post" action="login.php">
			<?php include('errors.php'); ?>
  <h2>Sign in</h2>
  		<div class="input-group">
  		<p>
			<label for="username" class="floatLabel" >username</label>
			<input name="username" type="text" required="Please Enter Your username">
		</p>
		</div>
		  		<div class="input-group">
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" required="Please Enter Your Password" type="password">
		</p>
	</div>

    <div class="box">
        	<button type="submit" class="btn" name="login_user"  style="width: 100%">Login</button>
    </div>

    	<p>
			<h3>not yet a member?</h3> <a href="register.php">register</a>
		</p>

	</form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>