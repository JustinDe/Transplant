<?php 
session_start();
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
Slowly, deliberately, you separate the few workable limbs you can find. Nothing is in particularly good shape. Even in life, these poor people weren't much better off than zombies. Still, you find enough to piece together a working body, and then place yourself squarely between your slumped shoulders. The body sighs, and surrenders itself to your command. You shamble back to find Brain-in-a-Store.
<br><br><br>
DROPS: Vagrant Torso, Vagrant Arm (Left), Vagrant Arm (Right), Vagrant Legs
<?php
	$username = $_SESSION['username'];
	$conn = mysql_connect("localhost", "db_user","db_pass");
	mysql_select_db("db_table", $conn);
	mysql_query("UPDATE player SET torso='11', armr='17', arml='13', legs='19' WHERE username='$username'", $conn);
?>
</div>
<div id="story_text">
<!--- Buttons Here ---><a href="heartselection.php">Next</a>
<p>


</p>
</div>

</div>

</body>
</html>