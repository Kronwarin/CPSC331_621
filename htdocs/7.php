<?php
$gap = 5;
	f5();
	function f5() {
		global $gap;
		echo $gap;
		$gap=1;
	}
	echo $gap;
