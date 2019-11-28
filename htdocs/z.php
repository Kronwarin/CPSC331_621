<?php
$i=1;
while ($i <= 10) {
	echo $i++;
}
?>

<?php
$i=1;
while ($i <= 12) {
	echo ($i++ * $_REQUEST["x"]."</br>");
}