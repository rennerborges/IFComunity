<?php 
include './init.php';
$conteudo = $_POST['conteudo'];
$curso = $_POST['curso'];
$turma = $_POST['turma'];
session_start();
$matricula = $_SESSION['matricula'];
$sql = "SELECT * FROM administrador WHERE matricula = $matricula";
$q1 = mysqli_query($con, $sql);

$infoAdm = mysqli_fetch_assoc($q1);
$idAdm = $infoAdm['PK_admin'];
if (($turma == 0 and $curso != 'TODOS') or ($curso == 'TODOS' and $turma != 0)) {
	header("location: ../sucesso.php?erro=3");
}else{
	if ($turma == 0 and $curso == 'TODOS') {
		$sql4 = "SELECT * FROM aluno";
		$q4 = mysqli_query($con,$sql4);
		while ($dadosUsuarios = mysqli_fetch_assoc($q4)) {
			$idUser2 = $dadosUsuarios['PK_aluno'];
			$tipo2 =  $dadosUsuarios['type'];
			$turma2 = $dadosUsuarios['turma'];
			$curso2 = $dadosUsuarios['curso'];
			if ($tipo2 != 0){
				$sql5 = "INSERT INTO notificacao(FK_adm,conteudo,turma,curso,view,FK_aluno) VALUES ($idAdm,'$conteudo',$turma2,'$curso2',0,$idUser2)";
				$q5 = mysqli_query($con,$sql5) or die(header("location: ../erro.php?erro=3"));
			}
		}
	}else{
		$sql2 = "SELECT * FROM aluno WHERE curso = '$curso' and turma = $turma";
		$q2 = mysqli_query($con,$sql2);
		while ($dadosUsuarios = mysqli_fetch_assoc($q2)) {
			$idUser = $dadosUsuarios['PK_aluno'];
			$tipo =  $dadosUsuarios['type'];
			if ($tipo != 0){
				$sql3 = "INSERT INTO notificacao(FK_adm,conteudo,turma,curso,view,FK_aluno) VALUES ($idAdm,'$conteudo',$turma,'$curso',0,$idUser)";
				$q3 = mysqli_query($con,$sql3)or die (header("location: ../erro.php?erro=3"));
			}
		}
	}
	header("location: ../sucesso.php?erro=3");
}
?>