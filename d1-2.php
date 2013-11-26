<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>d1</title>
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
	<img src="../images/CorrugatedCathyMeet.jpg">
</div>
<div id="story_text">
<p>
<!--- THIS IS WHERE STORY TEXT GOES ---->
<br>
<strong>Big Tony:</strong> ...
<br>
<strong>Corrugated Cammy:</strong> If you want to leave, it's none of my business. I'm just supposed to stop anyone from coming in. So make sure you're not forgetting anything. Good luck out there.
<br><br><br>
<a href="ending.php" style="float:right;">Next</a>
</p>
</div>

</div>

</body>
</html>