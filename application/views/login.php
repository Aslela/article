<html>
<head>
	<title>Backend Logon Panel</title>
</head>
<body>
	<h1>Admin Logon Panel</h1>
	<?php  
	if($error==1)
	{
	?>
		<p>Your username / password did not match.</p>
	<?php
	}
	?>
	<form action="<?=base_url()?>index.php/backend/backend_panel" method="post">
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