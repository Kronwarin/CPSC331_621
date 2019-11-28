<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=2;$col<=$namwarn;$col++) {
		echo(" ");	
	}
	
	for($col=0;$col<=5-$namwarn;$col++){
		echo("*");
	}
	for($col=0;$col<=4-$namwarn;$col++){
		echo("*");
	}
	for($col=$namwarn;$col>=1;$col--) {
		echo($col);
	}
	echo "<br/>";
}
?>
<br><a href="pyramid21.30.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>