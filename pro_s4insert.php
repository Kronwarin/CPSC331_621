<?php include("header1.php"); ?>
<body>
<br><br>
<table align="center">
<tr><td>
<form action="pro_s4insert.php">
<center>รหัสสินค้า :  <input name="nproductid" type="text" value=""  charset=utf-8></center>
<center>ชื่อสินค้า :  <input name="nproductname" type="text" value="" charset=utf-8></center>
<center>รหัสผู้จำหน่าย :  <input name="nsupplierid" type="text" value="" charset=utf-8></center>
<center>รหัสกลุ่มสินค้า :   <input name="ncategoryid" type="text" value="" charset=utf-8></center>
<center>ปริมาณต่อหน่วย :  <input name="nquantityperunit" type="text" value="" charset=utf-8></center>
<center><input type="submit" name="submit" value="ยืนยัน"></center>
</form>
</table>
<br><br>
<?php include("footer.php"); ?>
<?php
if (!isset($_GET['nproductid']) || !isset($_GET['nproductname'])) exit;
require("pro_s1connect.php");
$sql="insert into $tb values('".$_GET['nproductid']."','".$_GET['nproductname']."','".$_GET['nsupplierid']."','".$_GET['ncategoryid']."','".$_GET['ncategoryid']."')";
if(!$result=mysql_db_query($db,$sql)) 
  echo "$sql : failed";
else
  echo "$sql : succeeded";
mysql_close($connect);
?>
</body>