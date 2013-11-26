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
<strong>Crabhammer</strong><br/>
As you approach the end of the corridor you can hear a knocking sound. There's a weedy-looking gretch slamming something against the ground.To your relief, when it spots you, it scampers off into the ceiling tiles. It seems to have left behind a massive crab-claw. Luckily for you, it hadn't gotten at the meat inside. More for you!
<br><br>
	<?php
	$username= $_SESSION['username'];
	$conn = mysql_connect("localhost", "db_user","db_pass");
	mysql_select_db("db_table", $conn);
	$partInfo = mysql_query("SELECT * FROM parts WHERE partid = '18'");
	$row = mysql_fetch_array($partInfo);
	echo($row['partdescription']);
	echo("<br><br>");
	echo("Str: +".$row['stradj']);
	echo("<br>");
	echo("Dex: +".$row['dexadj']);
	echo("<br>");
	echo("Con: +".$row['conadj']);
	?>
</div>
<div id="story_text">
<a href="b3_limb_equip.php">Equip</a>
<br><br>
<a href="b3.php">Do Not Equip</a>
<p>


</p>
</div>

</div>

</body>
</html>