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
<body class="map_temp">
<?php include 'game/stats.php'; ?>

<style media="screen" type="text/css">
/* THIS IS WHERE YOU CHANGE THE BACKGROUND TEMPLATE!!!!!! */
#stage{background:url(../images/4way.jpg) no-repeat top center;}

</style>

<div id="stage">
<!--- 1 --->
<div></div>
<div></div>
<a href="startroom_p2.php"><div><img src="images/pointer.png" style="padding:50% 0 0;margin-top:-16px;"/></div></a>
<div></div>
<div></div>

<!--- 2 --->
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>

<!--- 3 --->
<a href="d6e6.php"><div class="left"><img src="images/pointer.png" style="padding:50% 0 0;margin-top:-16px;"/></div></a>
<div></div>
<div></div>
<div></div>
<a href="d6c6.php"><div class="left"><img src="images/pointer.png" style="padding:50% 0 0; margin-top:-16px;"/></div></a>

<!--- 4 --->
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>

<!--- 5 --->
<div></div>
<div></div>
<a href="d6d5.php"><div class="left"><img src="images/pointer.png" style="padding:50% 0 0;margin-top:-16px;"/></div></a>
<div></div>
<div></div>


</div>

</body>
</html>