<?php
$con = mysqli_connect("localhost","root","","ifc");

// Check connection
if (mysqli_connect_errno()){
 		$resposta["resp"] = false;
		echo json_encode($resposta);
	}
?>
