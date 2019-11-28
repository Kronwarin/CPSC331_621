<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["Status"]) || ($_SESSION["Status"]) < 2 )
{
 echo  ("<a href=logout.php>ไม่สามารถเข้าสู่หน้านี้ได้กรุณาLogin</a> ");
 exit();
}
?>
<?php 
if((int)phpversion() >= 7) {
   $connect = new mysqli("sql207.epizy.com", "epiz_24501293", "y7hMSf2TTT0olK", "epiz_24501293_kronwarin");  
} else {
   $connect = mysql_connect("sql207.epizy.com","epiz_24501293", "y7hMSf2TTT0olK");  
}
$sql = "insert into orders select * from myorders_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
$sql = "insert into orderdetails select * from myorderdetails_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
$sql = "delete from myorders_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
$sql = "delete from myorderdetails_temp";
if((int)phpversion() >= 7) $r = $connect->query($sql); else $r = mysql_db_query("prod",$sql);
if($r === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
if((int)phpversion() >= 7) $connect->close(); else $r = mysql_close($connect);
?>
<br/><a href=myorderform.php>new orderid</a>
<?php include("footer.php"); ?>