<?php 
	include './init.php';
	session_start();
	$matricula = $_SESSION['matricula'];
	$sql = "SELECT * FROM aluno WHERE matricula = '$matricula'";
	$q = mysqli_query($con,$sql);
	$dadosAluno = mysqli_fetch_array($q);
	// ID do usuario
	$idUser = $dadosAluno['PK_aluno'];
	// Data
	$data = date("d-m-y");
	// Conteudo
	$conteudo = $_POST['conteudo'];
	$sql2 = "INSERT into fale (FK_aluno,conteudo,data,view) VALUES ($idUser,'$conteudo','$data',0)";
	$q2 = mysqli_query($con,$sql2) or die(header("location: ../erro.php?erro=5"));
	header("location: ../sucesso.php?erro=5");
?>