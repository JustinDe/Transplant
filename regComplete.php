<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$reg = $_GET['reg'];
	if($reg="yes")
	{
		$conn = mysql_connect('localhost', 'db_user', 'db_pass');
		$errormessage = "";
		if($password != $confirmpassword)
		{
			$errormessage = "Your passwords do not match";
		}
		if($password == "" || $confirmpassword == "")
		{
			$errormessage = "One of the password fields was left blank";
		}
		if($errormessage != "")
		{
			header("Refresh: 3;url=register.php");
			echo("<p>There was an error with your submission</p>");
			echo("<ul>".$errormessage."</ul>");
			echo("You will be redirected in 3...2...1... ");
		}
		else
		{
			mysql_select_db("db_table", $conn);
			$usercheck = mysql_query("SELECT * FROM player WHERE username = '$username'", $conn);
			$row = mysql_fetch_array($usercheck);
			$existing = $row['username'];
			$existing = strtolower($existing);
			$username = strtolower($username);
			if($existing == $username)
			{
				header("Refresh: 5;url=register.php");
				echo("<p>There was an error with your submission</p>");
				echo("<ul>  Sorry that username already exists </ul>");
				echo("You will be redirected");
			}
			else
			{
				mysql_select_db("db_table", $conn);
				mysql_query("INSERT INTO player (username, password, playerimg, chp, thp, str, dex, con, loc, key1, key2, heart, torso, arml, armr, legs) VALUES ('$_POST[username]', '$_POST[password]', '../images/TooBadMomnDadGroundedYouToehnight.jpg', 50, 50, 1, 1, 1, 0, 0, 0, 1, 2, 3, 4, 5)", $conn);
				echo(mysql_error());
				header("Refresh: 3;url=index.php");
				echo("Your username is now registered<br />Please wait...");
			}
		}
	}
?>