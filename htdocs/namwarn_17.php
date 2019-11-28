<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col);
		echo(10-$namwarn);
		echo($col);
		echo(10-$namwarn);
		echo($col);
		echo(10-$namwarn);
		echo($col);
		echo(10-$namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="pyramid11.20.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>