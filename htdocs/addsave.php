<?php include("test_connect.php"); ?>
<!--table เป็นคำสั่งเริ่มต้นที่ใช้ในการสร้างตร. tr เป็นการกำหนดจุดเริ่มต้นของแถว. td เป็นคำสั่งในการกำหนดค่าเริ่มต้นของคอลัมน์-->
<?php
		// Check connection
			$sql = "INSERT INTO tbl_member 
			(Username, Password, Name, Sex, Id_Number, Telephone, Email, Status)
			VALUES ('".$_POST["Username"]."','".$_POST["Password"]."','".$_POST["Name"]."','".$_POST["Sex"]."','".$_POST["Id_Number"]."', '".$_POST["Telephone"]."','".$_POST["Email"]."','1')";

			

			$sql2 = "INSERT INTO tbl_location 
			(House_No, Village_No, Village, Road, Sub_district, District, Province, Postal_Code)
			VALUES ('".$_POST["House_No"]."','".$_POST["Village_No"]."','".$_POST["Village"]."','".$_POST["Road"]."','".$_POST["Sub_district"]."', '".$_POST["District"]."','".$_POST["Province"]."','".$_POST["Postal_Code"]."')";

			$query = mysqli_query($conn,$sql);
			$query = mysqli_query($conn,$sql2);

include("select.php");
			/*if ($conn->query($sql) === TRUE) {
			    echo "บันทึกข้อมูลของท่านเรียบร้อยแล้ว";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();*/
			
			
		?>

</td>
</tr>
</table>
<p>
<?php include("footer.php"); ?>
