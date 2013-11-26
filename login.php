<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = $_GET['login'];

	

	if($login=="yes")
	{
		session_start();
		$conn = mysql_connect("localhost", "db_user","db_pass");
		mysql_select_db("db_table", $conn);
		$playerInfo = mysql_query("SELECT * FROM player WHERE username='$username' and password='$password'", $conn);
		$row = mysql_fetch_array($playerInfo);
		$playerID = $row['playerID'];
		$usernameCheck = $row['username'];
		if($username != $usernameCheck)
		{
			header("Refresh: 3;url=index.php");
			echo "Invalid Login";
		}
		else
		{
			$_SESSION['username']=$username;
			header("Refresh: 3;url=intro1.php");
			echo ("Login Successful<br />Welcome Back: " .$_SESSION['username']."<br /> Please Wait...");
		}
	}
?>