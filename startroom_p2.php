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
<strong>BiaS:</strong> I was supposed to sell these, once. But I don't need the money, and it doesn't look like Roger has any anyway. So just take it. 
<br><br>
<strong>Big Tony:</strong> ...?
<br><br>
<strong>BiaS:</strong> Right. So, we need to get out of this place. I don't even know how we're going to deal with Corrugated Cathy yet, but we'll cross that bridge when we get to it.
<br><br>
<strong>Big Tony:</strong> ...
<br><br>
<strong>BiaS:</strong> I don't know. Just tape my jar to the head stump. This store runs itself anyway. Here, you can swim around in my neon emulsion.
<br><br>
Less carefully than you might think, you plop yourself into Brain-in-a-Store's jar, and duct tape it to the shoulders of your stolen body. To your suprise, you still have control over the body. Keen!
<br><br>
<strong>BiaS:</strong> Looks like you're still drivin'. Get us out of here.
<?php
		$username= $_SESSION['username'];
	$conn = mysql_connect("localhost", "db_user","db_pass");
	mysql_select_db("db_table", $conn);
	mysql_query("UPDATE player SET namestat='ToBiaS' WHERE username='$username'", $conn);
?>
</div>
<div id="story_text">
<!--- Buttons Here ---><a href="d6.php">Next</a>
<p>


</p>
</div>

</div>

</body>
</html>