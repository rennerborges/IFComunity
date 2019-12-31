<?php 
session_start();
if (!isset($_SESSION['matricula'])) {
  header("location: ../login.php");
}else{
  if ($_SESSION['tipo'] == "aluno") {
   header("location: ../menu-p.php");
 }
}

?>