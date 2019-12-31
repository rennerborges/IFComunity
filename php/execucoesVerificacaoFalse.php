<?php
include "init.php";
$matricula = $_GET['matricula'];
$sql = "DELETE FROM aluno WHERE matricula = '$matricula'";
$q = mysqli_query($con,$sql);
header("location: ../admin/caixa_verificacao.php");
?>
