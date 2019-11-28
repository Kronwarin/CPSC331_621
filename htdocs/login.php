<?php include("header.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<p>
<center><form action="check_login.php" name="frmAdd" method="post">
<table bgcolor="pink" width="512" high="1000" border="1" >
  <tr>
    <th bgcolor="yellow" colspan="2" align="center">Log In</th>
      </tr>
  <tr>
    <th width="250">Username</th>
    <td><input type="text" name="uname" size="20"></td>
    </tr>
  <tr>
    <th width="250">Password</th>
    <td><input type="Password" name="upass" size="20"></td>
    </tr>
	  <tr>
    <td bgcolor="yellow" colspan="2" align="center"> <input type="submit" name="submit" value="Log in"></td>
    </tr>
    </table>
 
</form>
<p>
  <p>
 <?php include("footer.php"); ?>