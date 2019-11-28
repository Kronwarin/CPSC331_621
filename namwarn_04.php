<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=1;$col<=$namwarn;$col++) {
		echo("*");
	}
	
	for($col=$namwarn;$col>=2;$col--){
		echo($col);
	}
	
	for($col=1;$col<=$namwarn;$col++){
		echo($col);
	}
	
	echo "<br/>";
}
?>
<br><a href="pyramid1.10.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>