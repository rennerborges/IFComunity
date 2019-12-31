<?php
include "init.php";

$matricula = $_POST['matricula'];
$senha = md5($_POST['senha']);
var_dump($_POST);

$sql = "SELECT * FROM aluno WHERE matricula = '$matricula' AND senha = '$senha' ";
$q = mysqli_query($con,$sql);
$rows = mysqli_num_rows($q);
if($rows == 0){
	$sql = "SELECT * FROM administrador WHERE matricula = '$matricula' AND senha = '$senha' ";
	$q = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($q);
	if($rows == 0){
		header("location: ../erro.php?erro=1");

	}else{
		header("location: ../sucesso.php?erro=1");
		session_start();
		$_SESSION['matricula'] = $matricula;
		$_SESSION['tipo'] = "adm";
	}
}else{
	$dados = mysqli_fetch_assoc($q);
	$tipo = $dados['type'];
	if ($tipo == 0) {
		header("location: ../aviso.php?matricula=$matricula");
		session_destroy();
	}else{
		header("location: ../sucesso.php?erro=1");
		session_start();
		$_SESSION['matricula'] = $matricula;
		$_SESSION['tipo'] = "aluno";
	}
}
?>