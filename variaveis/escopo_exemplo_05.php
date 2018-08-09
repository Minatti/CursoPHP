<?php 
	$boyBond = "Z4";

	function escopo1() {
		
		global $boyBond;
		echo $boyBond;
	}
/* Um escopo não interfere no outro */
	function escopo2() {

		$boyBand = "One direction";
		echo $boyBond." agora esta percorrendo aqui";
	}
escopo1();
escopo2();
?>