<?php include("header1.php"); ?>
<center><br><br>
<?php 
/* Section 1 : include */
if(file_exists("pro_s1connect.php")) 
  require("pro_s1connect.php"); 
else
  die("File not found");
 
/* Section 2 : main activity */
  dbWork("create database $db");
qWork("create table $tb (eproductid int(4),eproductname varchar(50),esupplierid int(50),ecategoryid int(50),equantityperunit int(50))");

mysql_close($connect);
echo '<br><a href="pro_s0index.php">back</a>';
 
/* Section 3 : function */
function dbWork($sql) {
  global $connect;
  if (!$result=mysql_query($sql,$connect))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
function qWork($sql) {
  global $db;
  if (!$result=mysql_db_query($db,$sql))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
?>
<br><br></center>
<?php include("footer.php"); ?>