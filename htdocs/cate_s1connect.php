<?php
ini_set('display_errors', 0); 
$host     = "sql207.epizy.com";
$db       = "epiz_24501293_kronwarin";  
$user     = "epiz_24501293"; 
$password = "y7hMSf2TTT0olK";
$tb	  = "Categories";
$dbstatus 	= 0;
myConnect();
       
function myConnect() {
	global $db,$host,$uname,$upass,$connect,$dbstatus;	
    //echo  $db,$host,$uname,$upass,$connect,$dbstatus;
	if((int)phpversion() >= 7) {
		$connect = new mysqli($host, $uname, $upass, $db);
		if ($connect->connect_error) $connect = new mysqli($host, $uname, $upass); else $dbstatus = 1;
        
		if ($connect->connect_error) die("Connection failed: " . $connect->connect_error);
	} else {
		if(!$connect = mysql_connect($host,$uname,$upass)) die("Connect failed : ");
          
	}
}

?>

