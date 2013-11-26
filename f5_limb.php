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
<strong>The Bloodmaster</strong><br/>
At the end of the hallway, you find some pushed-aside junk. You scan it quickly, and spot a hermetically-sealed case, the kind you might use to transport an organ. It looks like the Gretches couldn't defeat the child safety locks on it.
You manage to break it open by stomping on it. Inside is a funny-looking experimental heart.
<br><br>
	<?php
	$username= $_SESSION['username'];
	$conn = mysql_connect("localhost", "db_user","db_pass");
	mysql_select_db("db_table", $conn);
	$partInfo = mysql_query("SELECT * FROM parts WHERE partid = '10'");
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
<a href="f5_limb_equip.php">Equip</a>
<br><br>
<a href="f5.php">Do Not Equip</a>
<p>


</p>
</div>

</div>

</body>
</html>