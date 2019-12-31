<?php include './php/verificacaoAluno.php'; ?>
<?php 
include "./php/init.php";
?>    
<!DOCTYPE html>
<html>
<head>
	<title>Advertência</title>
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
      <a href="./menu-p.php" class="brand-logo center ">Advertência</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down"> </ul>
      <a href="./colecao.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
    </div>
  </nav>

  <div style="height: 128px;" class="col s12">
    <p style="text-align: center; margin: 0px !important; padding-top:5%;">Instituto Federal Goiano - Campus Morrinhos</p>
    <p style="text-align: center">Secretaria de Educação Proficional e Tecnológica</p>
    <p style="text-align: center">Coordenação de Assistência Estudantil</p>
  </div>
  
  <div class="col s12  tamanho" style="padding-left: 5%;padding-right: 5%;">
    <h4 style="text-align: center; margin: 0px !important;">Advertência</h4>
    <table>
     <?php 
     $idOcorrencia = $_GET['idOcorrencia'];
     $sql ="SELECT * FROM ocorrencia WHERE PK_ocorrencia = $idOcorrencia";
     $q = mysqli_query($con,$sql);
     $dadosOcorrencia = mysqli_fetch_assoc($q);
     $tipo = $dadosOcorrencia['tipo'];
     $observacao = $dadosOcorrencia['observacao'];
     $data = $dadosOcorrencia['dataOcorrencia'];
     $idUser = $dadosOcorrencia['FK_ALUNO'];

     $sql2 = "SELECT * FROM aluno WHERE PK_aluno = $idUser";
     $q2 = mysqli_query($con,$sql2);
     $dadosUser = mysqli_fetch_assoc($q2);
     $primeiroNome = ucwords($dadosUser['nome']);
     $segundoNome = ucwords($dadosUser['sobrenome']);
     $nome = "$primeiroNome "."$segundoNome";
     $matricula = $dadosUser['matricula'];

     ?>
     <tr>
      <th>Nome:</th>
      <td><?php echo($nome); ?></td>
    </tr>
    <tr>
      <th>Matricula:</th>
      <td><?php echo($matricula); ?></td>
    </tr>
    <tr>
      <th>Motivo:</th>
      <td><?php echo($observacao); ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo($tipo); ?></td>
    </tr>
    <tr>
      <th>Data:</th>
      <td><?php echo($data) ?></td>
    </tr>
  </table>
</div>

<?php
  include './admin/includes/footer.php';
?>


<script src="js/materialize.min.js"></script>
<script src="alunos.js"></script>
</body>
</html>