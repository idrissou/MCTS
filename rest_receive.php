<?php 

header("Content-Type: application/json");

$distances = (isset($_GET['distances'] )) ? $_GET["distances"] : NULL;

if ($distances) {
	// build a PHP variable from JSON sent using GET method
	$distances=json_decode(stripslashes($_GET["distances"]));
// encode the PHP variable to JSON and send it back on client-side
// process your information here before sending back the data 
	sleep(6);
	echo json_encode($distances);
} else {
	echo "FAILED. Server Did Not Receive Any Data";
}

?>