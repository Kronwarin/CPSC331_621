<?php
for($i=1; $i <= 10; $i++)
	echo $i;
?>

<?php
for($i=1; $i <= 12; $i++) {
	echo ($i * $_REQUEST["x"]."</br>");
}