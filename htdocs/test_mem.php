<?php
echo "<table border=\"1\" align=\"center\">";
$connect = new mysqli("127.0.0.1","root","123456","test");
$result = $connect->query("select * from mem order by u");
$i=1;
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) {
	if($i%2 == 0)
	echo "<tr bgcolor=yellow><td>".$i++."</td><td>".$row["id"]."</td><td>".$row["u"]."</td></tr>";	
	else
	echo "<tr bgcolor=red><td>".$i++."</td><td>".$row["id"]."</td><td>".$row["u"]."</td></tr>";		
		}	
}
	echo"</table>"
?>
