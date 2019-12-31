<?php 
	include "./init.php";
	$idNotificacao = $_GET['id'];
	$sql = "UPDATE notificacao SET view = 1 WHERE PK_notificacao = $idNotificacao";
	$q = mysqli_query($con,$sql);
	header("location: ../notificacao.php");
?>