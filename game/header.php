<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28008999-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
	$username= $_SESSION['username'];
	$conn = mysql_connect("localhost", "medicmkt_creator","godmode");
	mysql_select_db("medicmkt_monster", $conn);
	$playerInfo = mysql_query("SELECT * FROM player WHERE username='$username'", $conn);
	$row = mysql_fetch_array($playerInfo);
	
	$namestat = $row['namestat'];
	$playerimg = $row['playerimg'];
	$chp = $row['chp'];
	$thp = $row['thp'];
	$str = $row['str'];
	$dex = $row['dex'];
	$con = $row['con'];

	$heartq = mysql_query("SELECT partname FROM parts", $conn);

	$heart = mysql_result($heartq, $row['heart']-1);
	$torso = mysql_result($heartq, $row['torso']-1);
	$arml = mysql_result($heartq, $row['arml']-1);
	$armr = mysql_result($heartq, $row['armr']-1);
	$legs = mysql_result($heartq, $row['legs']-1);

	//$itembonus = mysql_query("SELECT * FROM parts WHERE partname = $heart");
	//$row2 = mysql_fetch_array($iembonus);

?>

<div id="support"><a href="mailto:phil@hashtagnerd.com">Report an Issue</a>|<a href="http://hashtagnerd.com">Visit Hashtag Nerd</a> | <a href="http://clicktotweet.com/VG8nP" target="_blank">Tweet our Game!</a></div>