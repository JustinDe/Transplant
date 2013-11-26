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
<body class="combat_template">
<?php include 'game/stats.php'; ?>

<style media="screen" type="text/css">
/* THIS IS WHERE YOU CHANGE THE BACKGROUND TEMPLATE!!!!!! */
#stage{}

</style>

<div id="stage">
<div id="combat_monster">
<img src="../images/TutRat.jpg">
</div>
<div id="combat_text">
<p>
<!--- THIS IS WHERE STORY TEXT GOES ---->
<br><br>Ahead you can see the room that Brain-in-a-Store pointed you toward. It's filled with disappointing looking body parts, heaped up without concern for order or preservation. Before you can reach it, however, an enterprising rat squeaks out, and begins making its way toward you, acting like it wants to teach you a lesson. It's only a rat. 
<br><br>Of course, you're only a toe.
<br><br>Fight the rat!
</p>
</div>
<div id="story_text">
<p>

<!--- BUTTONS GO HERE --->
<a href="ratattack_2.php">ATTACK</a>
</p>
</div>

</div>

</body>
</html>