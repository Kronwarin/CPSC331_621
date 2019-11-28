<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=7;$col++){
		echo("*");
	}
	
	echo($namwarn);
	for($col=1;$col<=$namwarn;$col++){
		echo("*");
	}
	for($col=$namwarn;$col<=$namwarn;$col++){
		echo(8-$namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="pyramid21.30.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>