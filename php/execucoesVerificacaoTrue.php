<?php
include "init.php";
$matricula = $_GET['matricula'];
$sql = "UPDATE aluno SET type = 1 WHERE matricula = $matricula";
$q = mysqli_query($con,$sql);
header("location: ../admin/caixa_verificacao.php");
?>