<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["Status"]) || ($_SESSION["Status"]) < 2 )
{
 echo  ("<a href=logout.php>ไม่สามารถเข้าสู่หน้านี้ได้กรุณาLogin</a> ");
 exit();
}
?>
<center>
<?php
$lastorderid = 1;
if((int)phpversion() >= 7) {
  $connect = new mysqli("sql207.epizy.com", "epiz_24501293", "y7hMSf2TTT0olK", "epiz_24501293_kronwarin");
  $result = $connect->query("select ordid from orders order by ordid desc limit 0,1");  
  if ($result->num_rows > 0) 
    if($row = $result->fetch_assoc()) $lastorderid = $row['ordid'] + 1;
  $connect->close(); 
} else {
  $connect = mysql_connect("sql207.epizy.com","epiz_24501293", "y7hMSf2TTT0olK");          
  $result = mysql_db_query("epiz_24501293_kronwarin","select ordid from orders order by orderid desc limit 0,1");  
  if (mysql_num_rows($result) > 0)
    if ($row = mysql_fetch_object($result)) $lastorderid = $row->orderid + 1;
  mysql_close($connect);  
}
?>
<form action=insertorderform.php method=post>
เลข Order <input name=orderid value="<?php echo $lastorderid; ?>"><br/><br/>
รหัส ลูกค้า <input name=customerid  autocomplete="off" value ="1202"><br/><br/>
รหัส พนักงาน <input name=employeeid autocomplete="off" value ="1302"><br/><br/>
รหัส ผู้ส่ง <input name=shid  autocomplete="off" value ="1402"><br/><br/>
<input type=submit value=order_process>
</form>
<?php include("footer.php"); ?>