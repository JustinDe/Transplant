<?php
	//SKULK HEART
	session_start();
	$username = $_SESSION['username'];
	$conn = mysql_connect('localhost', 'db_user', 'db_pass');
	mysql_select_db("db_table", $conn);
	mysql_query("UPDATE player SET heart='7', playerimg='../images/ToBiaSicon.jpg' WHERE username='$username'", $conn);
	echo(mysql_error());
	header("Refresh: 1;url=startroom_p2.php");
?>