<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["Status"]) || ($_SESSION["Status"]) < 2 )
{
 echo  ("<a href=logout.php>ไม่สามารถเข้าสู่หน้านี้ได้กรุณาLogin</a> ");
 exit();
}
?>
<?php $dt = new DateTime(); ?>
<center>

<form action=insertorderprocess.php name=orderform2 method=post >

รหัส order <input name=orderid value=<?php echo $_POST["orderid"]; ?> readonly><br/>
รหัส ลูกค้า  <input name=customerid value=<?php echo $_POST["customerid"]; ?> readonly><br/>
รหัส พนักงาน <input name=employeeid value=<?php echo $_POST["employeeid"]; ?> readonly><br/>
รหัส ผู้ส่ง <input name=shid value=<?php echo $_POST["shid"]; ?> readonly><br/>
ว/ด/ป         <input name=datetime value=<?php echo $dt->format('Y/m/d H:i:s'); ?> readonly><br/><br/>

<script type="text/javascript">
function getprice() {  
  var xmlHttp;
  try { xmlHttp=new XMLHttpRequest(); } catch (e) {
  try { xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
  try { xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) { return false; } } }
  xmlHttp.onreadystatechange=function() {
    if(xmlHttp.readyState==4) { document.orderform2.price.value=xmlHttp.responseText; }
  }
  xmlHttp.open("GET","mygetprice.php?proid=" + document.orderform2.proid.value  , true);
  xmlHttp.send(null);
}
</script>
<hr class=pa>
รหัส สินค้า <input name="productid" onkeyup="getprice();" autocomplete="off"  value ="1101"><br/><br/>
จำนวนสินค้า <input name="quantityperunit" autocomplete="off" ><br/><br/>
ราคาสินค้า  <input name="price" autocomplete="off"  ><br/><br/>
<input type=submit value=orderdetail_process>
</form></center>
<?php include("footer.php"); ?>