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
<body class="map_temp">
<?php include 'game/stats.php'; ?>

<style media="screen" type="text/css">
/* THIS IS WHERE YOU CHANGE THE BACKGROUND TEMPLATE!!!!!! */
#stage{background:url(../images/t-right.jpg) no-repeat top center;}

</style>
<?php 
$rng = rand(1,100);
if($rng <= 50)
{
	$randomNext = "randomcombat.php";
}
if($rng > 50)
{
	$randomNext = "randomnoncombat.php";
}
?>
<div id="stage">
<!--- 1 --->
<div></div>
<div></div>
<a href="e4e5.php"><div class="up"></div></a>
<div></div>
<div></div>

<!--- 2 --->
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>

<!--- 3 --->
<div></div>
<div></div>
<div><a href="e4_limb.php"><img src="images/foot.png" /></q></div>
<div></div>
<a href="e4d4.php"><div class="right"></div></a>

<!--- 4 --->
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>

<!--- 5 --->
<div></div>
<div></div>
<a href="e4e3.php"><div class="down"></div></a>
<div></div>
<div></div>


</div>

</body>
</html>