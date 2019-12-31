<?php include './php/verificacaoAluno.php'; ?>
<?php 
include "./php/init.php";
?>    
<!DOCTYPE html>
<html>
<head>
	<title>Advertências</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet"href="alunos.css">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="./img/favicon.ico">
</head>
<body>
  <nav>
    <div class="nav-wrapper" style="background-color: #0d5448;">
      <a href="./menu-p.php" class="brand-logo center ">Advertências</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">      </ul>
      <a href="./menu-p.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
    </div>
  </nav>
  <div class="collection" style="margin: 0px !important;">
    <?php 
    $matricula = $_SESSION['matricula'];
      // Busca o ID do usuario
    $sql = "SELECT * FROM aluno WHERE matricula = $matricula";
    $q = mysqli_query($con,$sql);
    $dadosUser = mysqli_fetch_assoc($q);
    $idUser = $dadosUser['PK_aluno'];

    $sql = "SELECT * FROM ocorrencia WHERE FK_aluno = $idUser ORDER BY PK_ocorrencia DESC";
    $q2 = mysqli_query($con,$sql);
    while ($ocorrencias = mysqli_fetch_assoc($q2)) {
      $tipo = $ocorrencias['tipo'];
      $data = $ocorrencias['dataOcorrencia'];
      $idOcorrencia = $ocorrencias['PK_ocorrencia'];
      ?>
      <a style="color: black;" href="<?php echo("adivertencia.php?idOcorrencia=$idOcorrencia") ?>" class="collection-item"><?php echo("$tipo - $data") ?></a>
    <?php } ?>
  </div>
</body>

<?php
include './admin/includes/footer.php';
?>

<script src="js/materialize.min.js"></script>
<script src="alunos.js"></script>
</body>
</html>