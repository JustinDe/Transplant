<?php 
$rng = rand(1,100);
if($rng <= 80)
{
	$randomNext = "randomcombat.php";
}
if($rng > 80)
{
	$randomNext = "randomnoncombat.php";
}
?>

<a href="<?php echo($randomNext); ?>"><div><?php $_SESSION['nextlevel']="d6.php"; ?></div></a>