<?php //พิมพ์เลขแรกถึงเลขที่สอง
echo prt(5,10);
		function prt($a,$b){
			$out ="";
			$i=$a; while($i<=$b) 
			{ $out .= $i."<br>"; $i++; }
			return $out;
		}
