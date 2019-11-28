<?php include("header.php"); ?>
<?php include ("ww.php");?>
<center><?php
for($namwarn=1;$namwarn<=3;$namwarn++) {
	for($col=1;$col<=4-$namwarn;$col++){
		echo ($namwarn+$col-1);
	}
	for($col=1;$col<=$namwarn;$col++){
		echo ("*");
	}
	for($col=2;$col<=$namwarn;$col++){
		echo ("*");
	}
	for($col=3;$col>=$namwarn;$col--){
		echo ($col);
	}
	echo "<br>";
}
for($namwarn=2;$namwarn>=1;$namwarn--) {
	for($col=1;$col<=4-$namwarn;$col++){
		echo ($namwarn+$col-1);
	}
	for($col=1;$col<=$namwarn;$col++){
		echo ("*");
	}
	for($col=3;$col<=1+$namwarn;$col++){
		echo ("*");
	}
	
	for($col=3;$col>=$namwarn;$col--) {
		echo ($col);
	}

	echo "<br>";
}
?>
<br><a href="pyramid31.36.php" >Back</a></br>
</center>
<?php include("footer.php"); ?>

