<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Transplant</title>
<link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
</head>
<?php include 'game/header.php'; ?>
<body class="story_template">
<?php include 'game/stats.php'; ?>

<style media="screen" type="text/css">
/* THIS IS WHERE YOU CHANGE THE BACKGROUND TEMPLATE!!!!!! */
#stage{}

</style>

<div id="stage">
<div id="story_pic">
	<img src="../images/ToBiaSMeet.jpg">
</div>
<div id="story_text">
<p>
<!--- THIS IS WHERE STORY TEXT GOES ---->
	<strong>BiaS:</strong> You're Big Tony, right? It looks like you and me are the most alive things in the room.
	<br /><br /><strong>Big Tony:</strong> ...
	<br /><br /><strong>BiaS:</strong> Look we need to get out of here. Your file says you've got some experience with locomotion. Walking, running, that sort of thing.

</p>
<a href="intro5.php" style="float:right;">Next</a>
</div>

</div>

</body>
</html>