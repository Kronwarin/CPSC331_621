<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col);	
	}
	for($col=1;$col<=$namwarn;$col++) {
		echo("*");
	}
	echo($col-1);
	for($col=1;$col<=6-$namwarn;$col++) {
		echo("*");
	}
	echo($col+3);
	echo "<br/>";
}
?>
<br><a href="pyramid11.20.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>