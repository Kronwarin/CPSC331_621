<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=3;$col<=1+$namwarn;$col++) {
	echo(" ");
	}
	for($col=0;$col<=5-$namwarn;$col++){
		echo($namwarn);
	}
	for($col=0;$col<=4-$namwarn;$col++){
		echo($namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="pyramid1.10.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>