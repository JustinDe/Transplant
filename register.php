<html>
	<head>
		<title>Login</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
	</head>
	<body class="login">
			<div id="portal">
            <img src="images/toe.jpg"/><br/>
		<form action="regComplete.php?reg=yes" method="POST">
			Username<br />
			<input type="text" name="username" maxlength="20">
			<br />Password<br />
			<input type="password" name="password" maxlength="20">
			<br />Password(confirm)<br />
			<input type="password" name="confirmpassword" maxlength="20">
			<br />
			<input type="submit" name="formSubmit" value="Register">
		</form>
		</center>
	</body>
</html>