<html>
<head>
	<title>Backend Panel Login Page</title>
</head>
<body>
	<h1>Admin Panel Login</h1>
	<?php  
	if($error==1)
	{
	?>
		<p>Your username / password did not match.</p>
	<?php
	}
	?>
	<form action="<?=base_url()?>index.php/user/backend_panel_login" method="post">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" />
		<br/>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" />
		<br/>
		<input type="submit" value="Logon" />
	</form>
</body>
</html>