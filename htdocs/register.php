<?php include("header.php"); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<p>
<form action="save_user.php" name="frmAdd" method="post">
<TABLE bgcolor="pink" align="center" width="624" height="800" border="1">
 <tr>
    <th bgcolor="yellow" colspan="2" align="center">Create account</th>
    </tr>
      
    <tr>
    <th width="200">Username</th>
    <td><input type="text" name="Username" size="50"></td>
    </tr>

    <tr>
    <th width="120">Password</th>
    <td><input type="Password" name="Password" size="50"></td>
    </tr>

    <tr>
    <th width="120">ชื่อ - นามสกุล</th>
    <td><input type="text" name="Name" size="50"></td>
    </tr>

    <tr>
    	<th width="120">เพศ</th>
    	<td align="center" colspan="2">
    <p><input class="w3-radio" type="radio" name="Sex" value="ชาย" checked>
		<label>ชาย</label></p>

		<p><input class="w3-radio" type="radio" name="Sex" value="หญิง">
		<label>หญิง</label></p>
		</td>
	</tr>

	<tr>
    <th width="120">เลขบัตรประชาชน 13 หลัก</th>
    <td><input type="text" name="Id_Number" size="50" minlength="13" maxlength="13" onKeyPress="return num_key(event);" onkeyUp="checkID(this.value);"></td>
    </tr>

    <tr>
    <th width="120">เบอร์โทรศัพท์</th>
    <td><input type="text" name="Telephone" size="50" maxlength="10"></td>
    </tr>

    <tr>
    <th width="120">E-mail</th>
    <td><input type="text" name="Email" size="50"></td>
    </tr>

    <tr>
    <th width="120">บ้านเลขที่</th>
    <td><input type="text" name="House_No" size="50"></td>
    </tr>

     <tr>
    <th width="120">หมู่ที่</th>
    <td><input type="text" name="Village_No" size="50"></td>
    </tr>

    <tr>
    <th width="120">ชื่อหมู่บ้าน</th>
    <td><input type="text" name="Village" size="50"></td>
    </tr>

    <tr>
    <th width="120">ถนน</th>
    <td><input type="text" name="Road" size="50"></td>
    </tr>

    <tr>
    <th width="120">ตำบล</th>
    <td><input type="text" name="Sub_district" size="50"></td>
    </tr>

    <tr>
    <th width="120">อำเภอ</th>
    <td><input type="text" name="District" size="50"></td>
    </tr>

    <tr>
    <th width="120">จังหวัด</th>
    <td><input type="text" name="Province" size="50"></td>
    </tr>

    <tr>
    <th width="120">รหัสไปรษณีย์</th>
    <td><input type="text" name="Postal_Code" size="50" maxlength="5"></td>
    </tr>

	<tr>
    <td bgcolor="yellow" colspan="2" align="center"> <input type="submit" name="submit" value="Create account"></td>
    </tr>
    </table>
 </form>

<p>
    <p>
 <?php include("footer.php"); ?>
