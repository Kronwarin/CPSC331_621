<?php include("header.php"); ?>
<?php include("test_connect.php"); ?>
<!--table เป็นคำสั่งเริ่มต้นที่ใช้ในการสร้างตร. tr เป็นการกำหนดจุดเริ่มต้นของแถว. td เป็นคำสั่งในการกำหนดค่าเริ่มต้นของคอลัมน์-->
<table align="center" width="1080"> 
	<tr>
		<td>
		<br><br>
		<h1><center><font color="Turquoise1" >ข้อมูลของท่าน</font></center></h1><hr class="ds3">
		</td>	
	</tr>
</table>
<table align="center" width="100%">
	<tr>
		<td align="center">
			
	<?php

		foreach($_POST as $key => $val) // All Key & Value
	{
		echo $key . " : " . $val . "<br>";
	}
		// Check connection
		if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			mysqli_set_charset($conn,'UTF8');
			$sql = "INSERT INTO tbl_member 
			(Username, Password, Name, Sex, Id_Number, Telephone, Email, Status)
			VALUES ('".$_POST["Username"]."','".$_POST["Password"]."','".$_POST["Name"]."','".$_POST["Sex"]."','".$_POST["Id_Number"]."', '".$_POST["Telephone"]."','".$_POST["Email"]."','1')";

			$query = mysqli_query($conn,$sql);

			$sql2 = "INSERT INTO tbl_location 
			(House_No, Village_No, Village, Road, Sub_district, District, Province, Postal_Code)
			VALUES ('".$_POST["House_No"]."','".$_POST["Village_No"]."','".$_POST["Village"]."','".$_POST["Road"]."','".$_POST["Sub_district"]."', '".$_POST["District"]."','".$_POST["Province"]."','".$_POST["Postal_Code"]."')";
			$query = mysqli_query($conn,$sql2);

			if ($conn->query($sql) === TRUE) {
			    echo "<font sive=7>บันทึกข้อมูลของท่านเรียบร้อยแล้ว</font>";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
			
		?>

</td>
</tr>
</table>
<p>
<?php include("footer.php"); ?>
