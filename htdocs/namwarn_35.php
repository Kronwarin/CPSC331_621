<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=0;$namwarn<=4;$namwarn++) {
	echo($namwarn+1);
	echo("*");
	for($col=1;$col<=1;$col++){
		echo($col+$namwarn+$namwarn);
	}
	echo("*");
	for($col=2;$col<=2;$col++){
		echo($col+$namwarn+$namwarn);
	}
	echo "<br/>";
}
?>

<br><a href="pyramid31.36.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>