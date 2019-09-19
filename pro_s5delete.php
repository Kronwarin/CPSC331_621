<?php include("header1.php"); ?>
<center><br><br>
<?php
$myForm = '<body>
<form action="pro_s5delete.php">
<input name="delproductid" value="">
<input type="submit" value="pro_s5delete.php">
</form>';
if (!isset($_GET['delproductid'])) { 
  echo $myForm;
  exit;
}
require("pro_s1connect.php");
$sql="delete from $tb";
$sql.="where productid ='".$_GET['delproductid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: pro_s0index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: pro_s0index.php");
	mysql_close($connect);
}
?>
<br><br></center>
<?php include("footer.php"); ?>
