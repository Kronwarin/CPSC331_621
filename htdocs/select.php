<?php include("header.php"); ?>
<div class="w3-content w3-padding" style="max-width:1564px">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<Center><h1>Data table</h1></Center>

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "sql207.epizy.com";
	$userName = "epiz_24501293";
	$userPassword = "y7hMSf2TTT0olK";
	$dbName = "epiz_24501293_kronwarin";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "SELECT * FROM tbl_member";
	$sql2= "SELECT * FROM tbl_location";
	mysqli_set_charset($conn,'UTF8');

	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);

?>
<center>
<table  class="table table-striped"  width="1300" height="250" align="center" border="2">
<center> <font face = "RSU" ><h1><span class="label label-danger">-ข้อมูลตารางผู้ใช้ทั้งหมด-</span></h1><br></center> 
  <tr>
    <th width="15"> <div align="center">ID </div></th>
    <th width="100"> <div align="center">Username</div></th>
    <th width="100"> <div align="center">Password</div></th>
    <th width="400"> <div align="center">ชื่อ-สกุล</div></th>
    <th width="80"> <div align="center">เพศ</div></th>
    <th width="250"> <div align="center">เลขบัตรประชาชน</div></th>
  	<th width="150"> <div align="center">เบอร์โทรศัพท์</div></th>
  	<th width="350"> <div align="center">อีเมล </div></th>
    <th width="450"> <div align="center">ที่อยู่</div></th>
    <th width="200"> <div align="center">สถานะ</div></th>
    <th width="150"> <div align="center">รหัสไปรษณีย์</div></th>
    <th width="50"> <div align="center">Edit </div></th>
    <th width="50"> <div align="center">Delete </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td></div align="center"><?php echo $result["ID"];?></div></td>
    <td align="center"><?php echo $result["Username"];?></td>
    <td align="center"><?php echo $result["Password"];?></td>
    <td><div align="center"><?php echo $result["Name"];?></div></td>
    <td align="center"><?php echo $result["Sex"];?></td>
    <td align="center"><?php echo $result["Id_Number"];?></td>
  	<td align="center"><?php echo $result["Telephone"];?></td>
  	<td align="center"><?php echo $result["Email"];?></td>
  

<?php
($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC))
?>
 <td><div align="left">
  <b>บ้านเลขที่:&nbsp;</b><?php echo $result2["House_No"];?><br>
  <b>หมูที่:&nbsp;</b><?php echo $result2["Village_No"];?><br>
  <b>ชื่อหมู่บ้าน:&nbsp;</b><?php echo $result2["Village"];?><br>
  <b>ถนน:&nbsp;</b><?php echo $result2["Road"];?><br>
  <b>ตำบล:&nbsp;</b><?php echo $result2["Sub_district"];?><br>
	<b>อำเภอ:&nbsp;</b><?php echo $result2["District"];?><br>
	<b>จังหวัด:&nbsp;</b><?php echo $result2["Province"];?><br></div>
  <td align="center"><?php echo $result["Status"];?></td>
  <td align="center">ไปรษณีย์ :<?php echo $result2["Postal_Code"];?></td>
	<td align="center"><a href="JavaScript:if(confirm('Confirm Edit?')==true){window.location='edit.php?ID=<?php echo $result["ID"];?>';}">Edit</a></td>
  <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='del.php?ID=<?php echo $result["ID"];?>';}">Delete</a></td>
</tr>
</div>
</center>
<?php
}
?>

<?php
?>

<?php
mysqli_close($conn);
?>
</table>

