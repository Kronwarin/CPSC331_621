<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=1;$col<=5-$namwarn;$col++) {
	echo(" ");
	}
	for($col=1;$col<=$namwarn;$col++){
		echo($col);
	}
	for($col=$namwarn;$col<=$namwarn;$col++){
		echo(6-$namwarn);
	}
	for($col=$namwarn;$col>=1;$col--){
		echo($col);
	}
	echo "<br/>";
}
?>
<br><a href="pyramid1.10.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>