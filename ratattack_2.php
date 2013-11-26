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
			<?php
				$username= $_SESSION['username'];
				$conn = mysql_connect("localhost", "db_user","db_pass");
				mysql_select_db("db_table", $conn);
				
				//Load Player Info-----------------------
				$playerInfo = mysql_query("SELECT * FROM player WHERE username='$username'", $conn);
				$row = mysql_fetch_array($playerInfo);
				$chp = $row['chp'];
				$thp = $row['thp'];
				$playerstr = $row['pstr'];
				$playerdex = $row['pdex'];

				//Load Enemy Info--------------
				$enemyInfo = mysql_query("SELECT * FROM enemy WHERE enemyid=4",$conn);
				$row2 = mysql_fetch_array($enemyInfo);
				$enemyname = $row2['monstername'];
				$enemyhit = $row2['hitchance'];
				$enemydmg = $row2['damage'];
				

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
						$nextPage = 'ratattack_2.php';
					}
					else
					{
						$nextPage = "";
						$dmg = rand(2,20);
						$nextMove = 'Move On';
						$nextPage = 'vagrantroom.php';
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
					$killed = "Somehow, you've overcome the average looking rodent. Nothing stands between you and a selection of third-rate body-parts.";
					mysql_query("UPDATE player SET chp='$chp' WHERE username='$username'", $conn);
				}
			?>
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