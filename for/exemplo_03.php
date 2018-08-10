<?php 

// Laço de repetição
echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--) {

	var_dump("Testando");

	echo '<option value="'.$i. '">'.$i.'</option>';
}

echo "</select>";
?>