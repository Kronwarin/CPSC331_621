<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	echo($namwarn);
	for($col=1;$col<=7-$namwarn;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$namwarn;$col++) {
		echo(" ");	
	}
	echo($namwarn);
	echo "<br/>";
}
?>
<br><a href="pyramid21.30.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>