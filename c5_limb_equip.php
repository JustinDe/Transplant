<?php
	session_start();
	header("Refresh: 1;url=c5.php");
	$username= $_SESSION['username'];
?>
<html>
<head>
	<title>equip</title>
</head>
	<body>
		<?php
			$conn = mysql_connect("localhost", "db_user", "db_pass");
			mysql_select_db("db_table", $conn);
			mysql_query("UPDATE player SET arml='14' WHERE username='$username'", $conn);
		?>
	</body>
</html>