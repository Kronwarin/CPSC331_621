<?php	/*session_start();  if(!isset($_SESSION["uch"])){	echo "<CENTER><FONT SIZE=5 COLOR=red>¡ÃØ³Ò Login!</FONT><BR><FONT SIZE=5 color=yelloe ><A HREF=logout.php>¡ÅÑºË¹éÒ Login</A></FONT></CENTER>"; exit();	} */

	include("test_connect.php");
  
	$sql = "UPDATE tbl_member SET 
		Username = '".$_POST["Username"]."' , 
		Password = '".$_POST["Password"]."' , 
		Name = '".$_POST["Name"]."',
		Sex = '".$_POST["Sex"]."',
		Id_Number = '".$_POST["Id_Number"]."',
		Telephone = '".$_POST["Telephone"]."',
		Email = '".$_POST["Email"]."' 
		WHERE ID = '".$_POST["ID"]."' ";

	$sql2 = "UPDATE tbl_location SET 
			House_No = '".$_POST["House_No"]."' ,
			Village_No = '".$_POST["Village_No"]."' ,
			Village = '".$_POST["Village"]."' ,
			Road = '".$_POST["Road"]."',
			Sub_district= '".$_POST["Sub_district"]."',
			District = '".$_POST["District"]."',
			Province = '".$_POST["Province"]."',
			Postal_Code = '".$_POST["Postal_Code"]."'
				WHERE ID = '".$_POST["ID"]."' ";
	
	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);

     if($query2) {
     include ("save_user.php");
 	}
?>
