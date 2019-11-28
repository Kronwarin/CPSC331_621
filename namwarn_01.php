<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=2;$col<=0+$namwarn;$col++) {
		echo(" ");
	}
	
	for($col=$namwarn;$col<=$namwarn+1;$col++) {
		echo($namwarn);
	}
	
	for($col=1;$col<=4-$namwarn;$col++){
		echo("**");
	}
	
	for($col=$namwarn;$col<=$namwarn+1;$col++) {
		echo($namwarn);
	}
	
	echo "<br>";
}
?>
<br><a href="pyramid1.10.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>
