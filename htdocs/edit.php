<?php 
include("header.php");
include("test_connect.php");

 ?> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php


   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  $sql = "SELECT * FROM tbl_member WHERE ID ='".$_GET['ID']."' ";
  $sql2 = "SELECT * FROM tbl_location WHERE ID =".$_GET['ID'];
  mysqli_set_charset($conn,'UTF8');

  $query = mysqli_query($conn,$sql);
  $query2 = mysqli_query($conn,$sql2);
  
  $result =mysqli_fetch_array($query,MYSQLI_ASSOC);
  $result2 =mysqli_fetch_array($query2,MYSQLI_ASSOC);
?>
<p>
    <form action="test_edit3.php" name="from_add" method="post">
	 		<center><table width="284" border="1">
		 		<tr>
			 		<th width="120">รหัส</th>
			 		<td width="238"><input type="text" name="ID" value="<?php echo $result["ID"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">Username</th>
			 		<td width="238"><input type="text" name="Username" value="<?php echo $result["Username"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">Password</th>
			 		<td width="238"><input type="text" name="Password" value="<?php echo $result["Password"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">ชื่อ - นามสกุล</th>
			 		<td width="238"><input type="text" name="Name" value="<?php echo $result["Name"];?>"></td>
		 		</tr>
		 		 <tr>
			    	<th width="120">เพศ</th>
			    	<td align="center" colspan="2">
			        <p><input class="w3-radio" type="radio" name="Sex" value="<?php echo $result["Sex"];?>" checked>
					<label>ชาย</label></p>

					<p><input class="w3-radio" type="radio" name="Sex" value="<?php echo $result["Sex"];?>">
					<label>หญิง</label></p>
					</td>
				</tr>
		 		<tr>
			 		<th width="120">เลขบัตรประชาชน 13 หลัก</th>
			 		<td width="238"><input type="text" name="Id_Number" value="<?php echo $result["Id_Number"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">เบอร์โทรศัพท์</th>
			 		<td width="238"><input type="text" name="Telephone" value="<?php echo $result["Telephone"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">E-mail</th>
			 		<td width="238"><input type="text" name="Email" value="<?php echo $result["Email"];?>"></td>
		 		</tr>
		 		<tr>
				 	<th width="120">บ้านเลขที่</th>
				 	<td width="238"><input type="text" name="House_No" value="<?php echo $result2["House_No"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">หมู่ที่</th>
				 	<td width="238"><input type="text" name="Village_No" value="<?php echo $result2["Village_No"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">หมู่บ้าน</th>
				 	<td width="238"><input type="text" name="Village" value="<?php echo $result2["Village"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">ถนน</th>
				 	<td width="238"><input type="text" name="Road" value="<?php echo $result2["Road"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">ตำบล</th>
				 	<td width="238"><input type="text" name="Sub_district" value="<?php echo $result2["Sub_district"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">อำเภอ</th>
				 	<td width="238"><input type="text" name="District" value="<?php echo $result2["District"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">จังหวัด</th>
				 	<td width="238"><input type="text" name="Province" value="<?php echo $result2["Province"];?>"></td>
			 	</tr>
			 	<tr>
				 	<th width="120">รหัสไปรษณีย์</th>
				 	<td width="238"><input type="text" name="Postal_Code" value="<?php echo $result2["Postal_Code"];?>"></td>
				 </tr>
				 <tr>
				    <th width="120">สถานะ</th>
				    <td align="center" colspan="2">
				    <p><input class="w3-radio" type="radio" name="Status" value="1" <?php if($result["Status"]=="1"){echo "checked"; } ?>>
					<label>User</label></p>

					<p><input class="w3-radio" type="radio" name="Status" value="2" <?php if($result["Status"]=="2"){echo "checked"; } ?>>
					<label>Admin</label></p>
					</td>
				</tr>
				<p>
	 		</center></table>
	 		<input type="submit" name="submit" value="Submit"></center>
    </form>

<p>
   <?php include("footer.php"); ?>

