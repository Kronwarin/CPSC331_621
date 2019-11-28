<?php  
$gap = 5;
f4();
function f4() {
  global $gap;
  $gap++;
}
echo $gap;
?>