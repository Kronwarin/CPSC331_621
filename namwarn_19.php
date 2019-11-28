<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col);	
	}
	
	for($col=$namwarn;$col<=9;$col++){
		echo("*");
	}
	for($col=2;$col<=$namwarn;$col++){
		echo(" ");
	}
	
	for($col=$namwarn;$col<=$namwarn;$col++){
		echo(6-$namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="pyramid11.20.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>