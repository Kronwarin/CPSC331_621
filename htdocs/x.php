<?php 
session_start();
# ������ http://www.thaiall.com/perlphpasp/source.pl?9137
# ===
# ��ǹ��˹����������鹢ͧ�к�
$host     = "localhost";
$db       = "test";  
$tb       = "test"; 
$user     = "root"; // ���ʼ���� ����ͺ����ҡ�������к�
$password = "";    // ���ʼ�ҹ ����ͺ����ҡ�������к�
$create_table_sql = "create table test (a varchar(20),  b varchar(20), c varchar(20))";
$tag1="<tr><form action='' method=post><td><input name=a size=5></td><td><input name=b size=40></td><td><input name=c size=20></td><td><input type=submit name=action value='add' style='height:26'></td></tr>
  </form></table>";
if (isset($_REQUEST{'action'})) $act = $_REQUEST{'action'}; else $act = "";
# ===
# ��ǹ�ʴ�����ѡ ��駻��� �����ѧ������ del ���� edit
if (strlen($act) == 0 || $act == "del" || $act == "edit") {
  $conn = mysql_connect("$host","$user","$password");
  $r = mysql_db_query($db,"select * from test") or die ("phpmyadmin - " . $create_table_sql . "<br/>" . mysql_error());
  echo "<table>";
  while ($o = mysql_fetch_object($r)) {
    if (isset($_REQUEST{'a'}) && $_REQUEST{'a'}  == $o->a) $chg = " style='background-color:#f9f9f9"; else $chg = " readonly style='background-color:#ffffdd";
    
echo f($o->a , $o->b , $o->c , $chg);

    if (isset($_REQUEST{'a'}) && $_REQUEST{'a'} == $o->a) {
      if ($act == "del") echo "<input type=submit name=action value='del : confirm' style='height:40;background-color:yellow'>";
      if ($act == "edit") echo "<input type=submit name=action value='edit : confirm' style='height:40;background-color:#aaffaa'>";
    } else {
      echo "<input type=submit name=action value='del' style='height:26'> <input type=submit name=action value='edit' style='height:26'>";
    }
    echo "</td></form></tr>";
  }	
  echo $tag1;
  if (isset($_SESSION["msg"])) echo "<br>".$_SESSION["msg"];
  $_SESSION["msg"] = ""; 
  exit;
} 
# ===
# ��ǹ����������
if ($act == "add") { 
  h("insert : completely" , "insert into test values('". $_REQUEST{'a'} . "','". $_REQUEST{'b'} . "','". $_REQUEST{'c'} . "')");
}
# ===
# ��ǹź������
if ($act == "del : confirm") {
  h("delete : completely" , "delete from test where a ='". $_REQUEST{'a'} . "'");
}
# ===
# ��ǹ��䢢�����
if ($act == "edit : confirm") {
  h("edit : completely" , "update $tb set b ='". $_REQUEST{'b'} . "', c ='". $_REQUEST{'c'} . "' where a =" . $_REQUEST{'a'});
}
#====
function h($m , $q){
	global $db , $host , $user , $password;
	$conn = mysql_connect("$host","$user","$password");
echo $q;

	$r = mysql_db_query($db,$q);   
	if ($r) $_SESSION["msg"] = $m;
  mysql_close($connect);  
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}

function f($a , $b , $c , $chg){
$z = "<tr><form action='' method=post>
      <td><input name=a size=5 value='". $a . "' style='background-color:#dddddd' readonly></td>
      <td><input name=b size=40 value='". $b . "' $chg'></td>
      <td><input name=c size=20 value='". $c . "' $chg;text-align:right'></td>
      <td>";
	return $z;
}
?>