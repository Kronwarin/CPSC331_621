<?php
ini_set('display_errors', 0); 
$host = "127.0.0.1"; 
$uname = "root";
$upass 	= "";
$db = "products"; 
$tb	= "tb_products";
$dbstatus 	= 0;
myConnect();
function myConnect() {
	global $db,$host,$uname,$upass,$connect,$dbstatus;	
	if((int)phpversion() >= 7) {
		$connect = new mysqli($host, $uname, $upass, $db);
		mysqli_set_charset($connect, "utf8");
		if ($connect->connect_error) $connect = new mysqli($host, $uname, $upass); else $dbstatus = 1;
		if ($connect->connect_error) die("Connection failed: " . $connect->connect_error);
	} else {
		if(!$connect = mysql_connect($host,$uname,$upass)) die("Connect failed : ");
	}
}
?>