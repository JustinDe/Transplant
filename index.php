<html>
	<head>
		<title>Login</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
	</head>
    
    <script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=20,width=320');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

	<body class="login">
			<div id="portal">
            <h2>Transplant</h2>
            <img src="images/toe.jpg"/><br/>
			<h2>Sign in Below</h2>
			<form action="login.php?login=yes" method="POST">
				<br />Username (case sensitive)<br />
				<input type="text" name="username" maxlength="20">
				<br />Password (case sensitive)<br />
				<input type="password" name="password" maxlength="20">
				<br />
				<input type="submit" name="formSubmit" value="Login">
			</form>
            
            <form action="register.php" method="POST">
				<input type="submit" name="formSubmit" value="New User">
			</form>
            <a href="audio.html" onClick="return popitup('audio.html')"><img src="images/audio.png"/> Sound On</a><br/>
</div>
	</body>
</htm>
