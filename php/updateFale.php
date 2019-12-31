<?php 
	include './init.php';
	$idFale = $_GET['id'];

	$sql = "UPDATE fale SET view = 1 WHERE PK_fale = $idFale";
	$q = mysqli_query($con,$sql);
	header("location: ../admin/faleAdm.php");
?>