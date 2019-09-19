<?php include("header1.php"); ?>
<center><br><br>
<?php
require("pro_s1connect.php");
$sql="select * from $tb";
if((int)phpversion() >= 7) {
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "productid: " . $row["productid"]. "- productname: " . $row["productname"]. "- supplierid: " . $row["supplierid"]."- categoryid: " . $row["categoryid"]."- quantityperunit: " . $row["quantityperunit"]. "<br/>";
		}
	} else {
		echo "no results";
	}
	$connect->close();
} else {	
	if (!$result=mysql_db_query($db,$sql)) die("Query : failed");
	echo "Display all records : <br/>";
	while ($object = mysql_fetch_object($result)) {
		echo $object->productid . "  " . $object->productname . "  " . $object->supplierid . "  " . $object->categoryid . "  " . $object->quantityperunit . "<br/>";
	}
	echo "Total " . mysql_num_rows($result) ." records";
	mysql_close($connect);
}
echo "<center><br><a href=pro_s0index.php>back</a>";
?>
<br><br></center>
<?php include("footer.php"); ?>