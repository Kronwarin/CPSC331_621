<?php include("header.php"); ?>
<?php include("test_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TABLE  align="center" width="624" height="100" border="1">


<?php

  $sql = "SELECT * FROM tbl_member WHERE ID=".$_SESSION["ID"];
  $sql2 = "SELECT * FROM tbl_location WHERE ID=".$_SESSION["ID"];

  $query = mysqli_query($conn,$sql);
  $query2 = mysqli_query($conn,$sql2);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
   $result2=mysqli_fetch_array($query2,MYSQLI_ASSOC);
?>
<form action="test_edit.php" name="test_edit" method="post">
  <Center><h1> ข้อมูลส่วนตัว </h1></Center>
  <tr><th width="120">ID</th>
    <td><input type="hidden" name="ID" size="5" value="<?php echo $result["ID"];?>"><?php echo $result["ID"];?></td></tr>
    <tr><th width="120">Status</th>
    <td align="left" colspan="2">
<p><input class="w3-radio" type="radio" name="Status" value="2" <?php if($result["Status"]=="1"){ echo "checked"; } ?>>
            <label>User</label></p>

    <tr><th width="120">Username</th>
    <td><input type="text" name="Username" size="50" value="<?php echo $result["Username"];?>"></td></tr>

    <tr><th width="120">Password</th>
    <td><input type="text" name="Password" size="50" value="<?php echo $result["Password"];?>"></td></tr>

     <tr> <th width="120">ชื่อ - นามสกุล</th>
    <td><input type="text" name="Name" size="50" value="<?php echo $result["Name"];?>"></td></tr>


    <tr><th width="120">เพศ</
    <tr>
              <td align="left" colspan="2">
    <p><input class="w3-radio" type="radio" name="Sex" value="ชาย" <?php if($result["Sex"]=="ชาย"){ echo "checked"; } ?>>
                <label>ชาย</label></p>

    <p><input class="w3-radio" type="radio" name="Sex" value="หญิง" <?php if($result["Sex"]=="หญิง"){ echo "checked"; } ?>>
                <label>หญิง</label></p>
              </td>
            </tr>

    <tr><th width="120">เลขบัตรประชาชน 13 หลัก</th>
    <td><input type="text" name="Id_Number" size="50" minlength="13" maxlength="13" value="<?php echo $result["Id_Number"];?>"></td></tr>
   

    <tr><th width="120">เบอร์โทรศัพท์</th>
    <td><input type="text" name="Telephone" size="50" maxlength="10" value="<?php echo $result["Telephone"];?>"></td></tr>

    <tr><th width="120">Email</th>
    <td><input type="Email" name="Email" size="50" value="<?php echo $result["Email"];?>"></td></tr>
  
    <tr><th width="120">บ้านเลขที่</th>
    <td><input type="text" name="House_No" size="50" value="<?php echo $result2["House_No"];?>"></td></tr>

    <tr>  <th width="120">หมู่ที่</th>
    <td><input type="text" name="Village_No" size="50" value="<?php echo $result2["Village_No"];?>"></td></tr>

    <tr><th width="120">ชื่อหมู่บ้าน</th>
    <td><input type="text" name="Village" size="50" value="<?php echo $result2["Village"];?>"></td></tr>

    <tr><th width="120">ถนน</th>
    <td><input type="text" name="Road" size="50" value="<?php echo $result2["Road"];?>"></td></tr>

    <tr><th width="120">ตำบล</th>
    <td><input type="text" name="Sub_district" size="50" value="<?php echo $result2["Sub_district"];?>"></td></tr>

    <tr><th width="120">อำเภอ</th>
    <td><input type="text" name="District" size="50" value="<?php echo $result2["District"];?>"></td></tr>

    <tr><th width="120">จังหวัด</th>
    <td><input type="text" name="Province" size="50" value="<?php echo $result2["Province"];?>"></td></tr>

    <tr><th width="120">รหัสไปรษณีย์</th>
    <td><input type="text" name="Postal_Code" size="50" value="<?php echo $result2["Postal_Code"];?>"></td></tr>
    </TABLE>
    <center><input type="submit" name="submit" value="Submit"> </center>

    <?php include("footer.php"); ?>