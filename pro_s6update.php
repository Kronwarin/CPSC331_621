<?php include("header1.php"); ?>
<center><br><br>
<body>
<form action="pro_s6update.php">
<center>รหัสสินค้า :  <input name="updproductid" value=""></center>
<center>รหัสผู้จำหน่าย : <input name="updproductname" value=""></center>
<center>รหัสผู้จำหน่าย : <input name="updsupplierid" value=""></center>
<center>รหัสกลุ่มสินค้า : <input name="updcategoryid" value=""></center>
<center>ปรมาณต่อหน่วย : <input name="updquantityperunit" value=""></center>
<input type="submit" value="pro_s6update.php">
</form>
<?php
if (!isset($_GET['updproductid'])) { exit; }
require("pro_s1connect.php");
$sql="update $tb set ";
$sql.="productid='". $_GET['updproductid'] ."', ";
$sql.="productname='". $_GET['updproductname'] ."' ";
$sql.="supplierid='". $_GET['updsupplierid'] ."' ";
$sql.="categoryid='". $_GET['updcategoryid'] ."' ";
$sql.="quantityperunit='". $_GET['updquantityperunit'] ."' ";
$sql.="where eproductid='". $_GET['updproductid'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";
mysql_close($connect);
?>
</body>
<br><br></center>
<?php include("footer.php"); ?>