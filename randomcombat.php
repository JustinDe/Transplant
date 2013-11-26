<?php 
session_start();
$movingforward = $_SESSION['nextlevel'];
	$username= $_SESSION['username'];
	$conn = mysql_connect("localhost", "db_user","db_pass");
	mysql_select_db("db_table", $conn);
	
	//Load Player Info-----------------------
	$playerInfo = mysql_query("SELECT * FROM player WHERE username='$username'", $conn);
	$row = mysql_fetch_array($playerInfo);
	$chp = $row['chp'];
	$thp = $row['thp'];
	$playerstr = $row['str'];
	$playerdex = $row['dex'];
	$playercon = $row['con'];
	if($chp <= 0)
	{
		header('Location: death.php');
	}

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
<?php


	//Load Enemy Info--------------
	$randMonster = rand(1,3);
	$enemyInfo = mysql_query("SELECT * FROM enemy WHERE enemyid='$randMonster'",$conn);
	$row2 = mysql_fetch_array($enemyInfo);
	$enemyname = $row2['monstername'];
	$enemyhit = $row2['hitchance'];
	$enemydmg = $row2['damage'];
	$enemyimg = $row2['enemyimg'];

	$hpregain = ($chp + $playercon + 2);
	mysql_query("UPDATE player SET chp='$hpregain' WHERE username='$username'", $conn);
	
	
	
	if($enemyname == 'Sloomba')
	{
		$introflavor = "You're fighting a Sloomba!<br><br>The Sloomba is near-organism developed by Dr. Vantis to keep his floors clean. It technically consists of a single enormous cell, and as they scoot their amoeboid bodies through the hallways, the glom up all the cruft and discarded body parts from the floor. It half-rolls, half slides toward you without malice. Unfortunately, you still seem to be made of discarded body parts.";
	}
	if($enemyname == 'Gretch')
	{
		$introflavor = "You're fighting a Gretch!<br><br>These awful little creatures were, until recently, mostly used by Dr. Vantis as test subjects. Squat feline gremlins with black fur and yellow eyes, Gretches are regarded as cryptozoological in most of the world. Here, however, they are bothersome and violent, and very real. This one looks up at you, hisses, and skitters forward.";
	}
	if($enemyname == 'Cardboard Golem')
	{
		$introflavor = "You're fighting a Cardboard Golem<br><br>Through some unknown process, Dr. Vantis began animating his discarded packing materials in order to provide the labs with a sort of peacekeeping force. Since his disappearance, however, they've become as rowdy and rambunctious as the creatures they were supposed to be policing. This one ambles toward you blindly, preparing to swing. ";
	}

	$hit = 50 + ($playerdex * 4);
	$playerDC  = rand(1,100);
	if($DC > $hit)
	{
		$playerAttack = 'MISSED';
		$dmg = 0;
	}
	else
	{
		$playerAttack = 'HIT';
		$killDC = rand(1,100);
		$killHit = 50 + ($playerstr * 4);
		if($killDC > $killHit)
		{
			$dmg = 1;
			$nextMove = 'Attack';
			$nextPage = 'randomcombat.php';
		}
		else
		{
			$nextPage = "";
			$dmg = rand(2,20);
			$nextMove = 'Move On';
			$nextPage = $movingforward;
		}
	}

	$enemyDC = rand(1,100);
	if($enemyDC > $enemyhit)
	{
		$enemyAtttack = 'MISSED';
		$enemydmg = 0;
	}
	else
	{
		$enemyAtttack = 'HIT';
		$enemydmg = $enemydmg + rand(1,6);
		$chp = $chp - $enemydmg;
		if($enemyname == 'Sloomba')
		{
			$killed ="The Sloomba dissolves, leaving behind a puddle of gooey trash. Hopefully another one happens by to clean this up.";
		}
		if($enemyname == 'Gretch')
		{
			$killed ="The Gretch skids to a halt, dead on the ground. You admire the scratch marks it left on you as you continue on.";
		}
		if($enemyname == 'Cardboard Golem')
		{
			$killed ="The Cardboard Golem folds itself into a pile of soggy cardboard.<br><br>Return to Sender.";
		}
		mysql_query("UPDATE player SET chp='$chp' WHERE username='$username'", $conn);
	}
?>


<div id="stage">
<div id="combat_monster">
<img src="<?php echo($enemyimg); ?>">
</div>
<div id="combat_text">
<p>
<!--- THIS IS WHERE STORY TEXT GOES ---->
<br><br>
<?php echo($introflavor); ?>
<br><br>
<?php echo('You '.$playerAttack.' the '. $enemyname . ' for ' . $dmg . ' damage'); ?> 
<br><br>
<?php echo('The '. $enemyname .' '. $enemyAtttack . ' you for ' . $enemydmg . ' damage'); ?>
<br><br>
<?php echo($killed); ?>
</p>
</div>
<div id="story_text">
<p>

<a href=<?php echo($nextPage); ?> ><?php echo($nextMove) ?></a>
</p>
</div>

</div>

</body>
</html>