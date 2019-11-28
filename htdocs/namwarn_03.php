<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col);
	}
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col+4);
	}
	
	for($col=0;$col<=3+$namwarn;$col++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?>
<br><a href="pyramid1.10.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>