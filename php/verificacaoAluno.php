<?php 
session_start();
if (!isset($_SESSION['matricula'])) {
  header("location: ./login.php");
}else{
  if ($_SESSION['tipo'] == "adm") {
   header("location: ./admin/menuAdm.php");
 }
}

?>