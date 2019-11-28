<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=0;$col<=5-$namwarn;$col++) {
		echo($namwarn);	
	}
	
	for($col=1;$col<=$namwarn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<br><a href="pyramid21.30.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>