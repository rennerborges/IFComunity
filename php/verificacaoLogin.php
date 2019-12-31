<?php 
session_start();
if (isset($_SESSION['matricula'])) {
	if ($_SESSION['tipo']=='aluno') {
		header("location: ./menu-p.php");
	}else{
		header("location: ./admin/menuAdm.php");
	}
}

?>