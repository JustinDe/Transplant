<?php
	session_start();
	$_SESSION['nextlevel']="b3.php";
	$rng = rand(1,100);
	if($rng <= 50)
	{
		$randomNext = "randomcombat.php";
	}
	if($rng > 50)
	{
		$randomNext = "randomnoncombat.php";
	}
	header("Refresh: 1; URL=$randomNext");
?>