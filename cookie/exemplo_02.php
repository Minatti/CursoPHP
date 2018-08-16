<?php  
if (isset($_COOKIE["checksearch"])) {
	
	$obj = (json_encode($_COOKIE["checksearch"]));

	echo $obj->empresa; 
}
?>