<?php  

	$filename = "users.csv";

	if (file_exists($filename)){

		$file = fopen($filename, "r");

		$headers = explode(",", fgets($file));

		$data = array();

		while ($row = fgets($file)) {

		$rowData = explode(",", $row);
		$linha = array();

		for ($i = 2; $i < count($headers); $i++) {

			$linha[$headers[$i]] = $rowData[$i];

		}
		//var_dump($bugData);
		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);

	}

?>