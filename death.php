<?php 
session_start();
$_SESSION['nextlevel'] = "d6.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hashtag Nerd Game</title>
<link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
</head>
<?php include 'game/header.php'; ?>
<body class="text_temp">
<?php include 'game/stats.php'; ?>

<style media="screen" type="text/css">
/* THIS IS WHERE YOU CHANGE THE BACKGROUND TEMPLATE!!!!!! */
#stage{}

</style>

<div id="stage">
<div id="story_pic">
<!--- THIS IS WHERE STORY TEXT GOES ---->
You collapse. This is not the first time your body has died of blunt force trauma. You suspect that you're being dragged along the linoleum floor, although it may just be another one of those dreams.
<br><br>
When you finally come around again, you find yourself just outside the room where you met BiaS.
<?php
	$username= $_SESSION['username'];
	$conn = mysql_connect("localhost", "db_user","db_pass");
	mysql_select_db("db_table", $conn);
	$playerInfo = mysql_query("SELECT * FROM player WHERE username='$username'", $conn);
	$row = mysql_fetch_array($playerInfo);
	$chp = $row['chp'];
	$thp = $row['thp'];
	mysql_query("UPDATE player SET chp='$thp' WHERE username='$username'", $conn);
?>
</div>
<div id="story_text">
<a href="d6.php">Stand Up</a>
<p>


</p>
</div>

</div>

</body>
</html>