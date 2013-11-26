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
<body class="non_combat_template">
<?php include 'game/stats.php'; ?>

<style media="screen" type="text/css">
/* THIS IS WHERE YOU CHANGE THE BACKGROUND TEMPLATE!!!!!! */
#stage{}

</style>

<div id="stage">
<div id="non_combat_text">
<p>
<!--- THIS IS WHERE STORY TEXT GOES ---->
BiaS: Not a bad collection there. You look sharp. I think his name was Roger. Mostly. Looks like he's missin' something... Oh, yeah. I can't send you off without one of these, can I? Go ahead, pick one.
<br><br>
Choose: <a href="choosebruteheart.php">Brute Heart</a>
<br><br>
Choose: <a href="chooseskulkheart.php">Skulk Heart</a>
<br><br>
Choose: <a href="choosearticicalheart.php">Artifical Heart</a>
</p>
</div>
<div id="story_text">
<p>

<!--- BUTTONS GO HERE --->
</p>
</div>

</div>

</body>
</html>