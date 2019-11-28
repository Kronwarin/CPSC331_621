<?php session_start();
	 include("test_connect.php");
	$sql = "SELECT * FROM tbl_member WHERE Username = '".mysqli_real_escape_string($conn,$_POST['uname'])."'and Password = '".mysqli_real_escape_string($conn,$_POST['upass'])."' ";
	$objQuery = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

		//echo print_r($_SESSION);die; 

	if(!$objResult)
	{
		include("header.php");

		//echo "กรุณากรอก Username และ Password ให้ถูกต้อง";
		echo "<table  align=center width=500 border=0><tr align=center><br><br><br><br><td><h1><font color=red>กรุณากรอก Username และ Password ให้ถูกต้อง</font></h1><br><br><br><a  class= button href = login.php><font size= 5>กลับไปหน้า Login</a></font><br><br><br><br></td></tr></table>";
		include("footer.php"); 
	}
	else
	{
		
			$_SESSION["ID"] = $objResult["ID"];
			$_SESSION["Username"] = $objResult["Username"];
			$_SESSION["Status"] = $objResult["Status"];
			
			//$ID = $objResult['id']; 
			session_write_close();

		/*if($objResult["Status"] == "2")
			{
				
				echo header("Location:index.php");
			}
			else
			{
				
				echo header("Location:index.php");
			}*/
			include("header.php");
      		echo "<table align = center><tr><br><br><br><br><td align = center width = 900 ><img src = /image/Pathom.png style = width:100%></td></tr></table><p><p>" ;
            include("footer.php");
	}

	mysqli_close($conn);
	 
?> 


		