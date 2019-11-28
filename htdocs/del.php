<?php include("header.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table align="center" width="1080">

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "";
	$dbName = "member_system";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	mysqli_set_charset($conn,'UTF8');

	$Delete = $_GET["ID"];
	$sql = "DELETE FROM tbl_member
			WHERE ID = '".$Delete."' ";

	$Delete2 = $_GET["ID"];
	$sql2 = "DELETE FROM tbl_location
			WHERE ID = '".$Delete2."' ";

	$query = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);


	if(mysqli_affected_rows($conn)) 
	{
		 echo "<h1><p><center><font size=100%>บันทึกการลบสำเร็จ</font></center></p></h1>";
	}

	mysqli_close($conn);
?>
</td>
		</tr>
</table>
<table align="center" width="1080">
		<tr align="center">
			<td align="center">
				<h4>
					<hr class="ds2">
					<a class="w3-btn w3-ripple w3-hover-green" href =select.php><font color="red">ไปหน้าตาราง</a>
					<hr class="ds2">
				</h4>
			</td>
		</tr>
</table>
<?php include("footer.php"); ?>