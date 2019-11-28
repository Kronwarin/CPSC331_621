<?php	/*session_start();  if(!isset($_SESSION["uch"])){	echo "<CENTER><FONT SIZE=5 COLOR=red>¡ÃØ³Ò Login!</FONT><BR><FONT SIZE=5 color=yelloe ><A HREF=logout.php>¡ÅÑºË¹éÒ Login</A></FONT></CENTER>"; exit();	} */

	include("test_connect.php");
  
	$sql2 = "UPDATE tbl_location SET House_No = '".$_POST["House_No"]."' , Village_No = '".$_POST["Village_No"]."' , Village = '".$_POST["Village"]."',Road = '".$_POST["Road"]."',Sub_district = '".$_POST["Sub_district"]."',District = '".$_POST["District"]."',Province = '".$_POST["Province"]."',Postal_Code = '".$_POST["Postal_Code"]."' WHERE ID = '".$_POST["ID"]."' ";
	
	$query2 = mysqli_query($conn,$sql2);


		if($query2){
	echo "<script type='text/javascript'>";
	echo "alert('Save  Succesfuly')";
	echo "window.location = 'select.php' ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Save again')";
	echo "</script>";
}
	mysqli_close($conn);