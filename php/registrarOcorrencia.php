<?php 
	include "init.php";
	$matricula = $_POST['matricula'];
	$sql2 = "SELECT * FROM aluno WHERE matricula = $matricula";
	$q2 = mysqli_query($con,$sql2);
	$dadoUser = mysqli_fetch_assoc($q2);
	$idAluno = $dadoUser['PK_aluno'];
	$tipo = $_POST['tipoAd'];
	$motivo = $_POST['teste'];
	$curso = $dadoUser['curso'];
	$turma = $dadoUser['turma'];
	$conteudo = "Você ganhou uma advertência do tipo $tipo";
	session_start();
	$matricula = $_SESSION['matricula'];
    $sql = "SELECT * FROM administrador WHERE matricula = $matricula";
    $q = mysqli_query($con,$sql);
    $dadosAdm = mysqli_fetch_assoc($q);
    $idProf = $dadosAdm['PK_admin'];
    $data = date("d-m-y");
    $hora = date('H:i:s');
	
	$sql3 = "INSERT INTO ocorrencia (FK_ADMIN,FK_ALUNO,tipo,dataOcorrencia,observacao,hora) VALUES ($idProf,$idAluno,'$tipo','$data','$motivo','$hora')";
	$q = mysqli_query($con,$sql3) or die(header("location: ../erro.php?erro=2"));
	$sql4 = "INSERT INTO notificacao(FK_adm,conteudo,turma,curso,view,FK_aluno) VALUES ($idProf,'$conteudo',$turma,'$curso',0,$idAluno)";
	$q4 = mysqli_query($con,$sql4);
	header("location: ../sucesso.php?erro=2");

?>