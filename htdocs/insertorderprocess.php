<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["Status"]) || ($_SESSION["Status"]) < 2 )
{
 echo  ("<a href=logout.php>ไม่สามารถเข้าสู่หน้านี้ได้กรุณาLogin</a> ");
 exit();
}

if((int)phpversion() >= 7) {
 $connect = new mysqli("sql207.epizy.com", "epiz_24501293", "y7hMSf2TTT0olK", "epiz_24501293_kronwarin");  
} else {
$connect = mysql_connect("sql207.epizy.com","epiz_24501293", "y7hMSf2TTT0olK");     
}
if(isset($_POST["custid"])) {
$sql = "insert into myorders_temp values (" .
$_POST["orderid"] . "," .
$_POST["customerid"] . "," .
$_POST["employeeid "] . "," .
$_POST["orderdate"] . ",'" .
$_POST["shid"] . "')";
if((int)phpversion() >= 7) {
  $result = $connect->query($sql);
} else {
  $result = mysql_db_query("epiz_24501293_kronwarin",$sql);
}
if($result === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
}
echo "<br/>";
$sql = "insert into myorderdetails_temp values (" .
//$_POST["orderid"] . "," .
//$_POST["customerid"] . "," .
//$_POST["employeeid "] . "," .
//$_POST["orderdate"] . ",'" .
//$_POST["shid"] . "')";

$_POST["orderid"] . "," .
$_POST["productid"] . "," .
$_POST["quantity"] . "," .
$_POST["unitprice"] . "," .'0'.")";

if((int)phpversion() >= 7) {
  $result = $connect->query($sql);  
} else {
  $result = mysql_db_query("epiz_24501293_kronwarin",$sql);  
}
if($result === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
echo "<br/>";
if((int)phpversion() >= 7) {
  $result = $connect->query("select * from products where productid = " . $_POST["productid"]); 
} else {
  $result = mysql_db_query("epiz_24501293_kronwarin","select * from products where productid = " . $_POST["productid"]);  
}
if((int)phpversion() >= 7) {
  if ($result->num_rows > 0 && $row = $result->fetch_assoc()) { 
    $quantityperunit= $row["quantityperunit"]; 
    $sql="update	 products set quantityperunit =".($quantityperunit - $_POST["quantityperunit"]) ." where productid =".$_POST["productid"]; 
    $result_pro = $connect->query($sql);

  }
} else {
  if (mysql_num_rows($result) > 0 && $row = mysql_fetch_assoc($result)) { 
    $quantityperunit = $row["quantityperunit"]; 
    $sql="update products set quantityperunit=".($quantityperunit - $_POST["quantityperunit"]) ." where productid =".$_POST["productid"]; 
    $result_pro = mysql_db_query("epiz_24501293_kronwarin",$sql);  
	;
  }
}  
if($result === FALSE)  echo "$sql : failed"; else echo "$sql : succeeded";
?>
<script type="text/javascript">
function getprice() {  
  var xmlHttp;
  try { xmlHttp=new XMLHttpRequest(); } catch (e) {
  try { xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
  try { xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) { return false; } } }
  xmlHttp.onreadystatechange=function() {
    if(xmlHttp.readyState==4) { document.orderform.price.value=xmlHttp.responseText; }
  }
  xmlHttp.open("GET","mygetprice.php?productid=" + document.orderform.productid.value  , true);
  xmlHttp.send(null);
}
</script>
<hr class='pa' ><br/>
<form name=orderform action=insertorderprocess.php method=post>
หมายเลข Order		<input name=orderid  value=<?php echo $_POST["orderid "]; ?> readonly>
วันเวลา ณ ปัจจุบัน		<input name=datetime value=<?php echo date('Y/m/d H:i:s'); ?> readonly><br/>
รหัส สินค้า					<input name=productid  onkeyup="getprice();" autocomplete="off" value ="1101"><br/>
ราคาส่วนลด				<input name= discount   value ="รอปรับปรุงระบบ" style="background-color:#dddddd;"><br/>
จำนวนสินค้าที่ต้องการซื้อ <input name=quantity autocomplete="off" value ="1"><br/><!-- allows the browser to predict the value -->
ราคาสินค้า						<input name=unitprice  readonly style="background-color:#dddddd;"><br/>
									<input type=submit value=orderdetail_process>
</form>
<?php
echo "<hr class='pa' ><center>";
if((int)phpversion() >= 7) {
  $result = $connect->query("select * from myorderdetails_temp");
 // echo $result->num_rows . "<ol>";
 $i =1;
  if ($result->num_rows > 0) {
    $sum = 0;  
    while($row = $result->fetch_assoc()) {
      $sum += ($row['quantity'] * $row['unitprice']);  
      echo  " <li> ลำดับที่ $i 	[productid = " . $row['productid'] . " ] ".  $row['quantity'] .  " * " . 
      $row['unitprice'] . " = " . ($row['quantity'] * $row['unitprice']) . "</li>";
	  $i++;
    } 
  }
  $connect->close();   
} else {
  $result = mysql_db_query("epiz_24501293_kronwarin","select * from myorderdetails_temp");
  echo mysql_num_rows($result) . "<ol>";
  if (mysql_num_rows($result) > 0) {
    $sum = 0;   
    while($row = mysql_fetch_assoc($result)) {
      $sum += ($row['quantity'] * $row['unitprice']);     
      echo  "<li> [productid = " . $row['productid'] . " ] ".  $row['quantity'] .  " * " . 
      $row['unitprice'] . " = " . ($row['quantity'] * $row['unitprice']) . "</li>";
    } 
  }
  mysql_close($connect);  
}

echo "<br/>sum = $sum</ol>";
echo "<hr class='pa' ><a href=insertorderconfirm.php>confirm this order and save</a>" ;
echo "<br/><a href=myorderform.php>back</a>" ;
?>
<?php include("footer.php"); ?>