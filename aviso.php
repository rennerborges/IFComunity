
<?php 
include "php/init.php";
$matricula = $_GET['matricula'];
$sql = "SELECT * FROM aluno WHERE matricula = '$matricula'";
$q = mysqli_query($con,$sql);
$row = mysqli_num_rows($q);
if ($row == 0) {
  header("location: ./login.php");
}
$dadosUser = mysqli_fetch_assoc($q);
$primeiroNome = $dadosUser['nome'];
$segundoNome = $dadosUser['sobrenome'];
$nome = "$primeiroNome ". "$segundoNome";
?>    
<!DOCTYPE html>
<html>
<head>
	<title>IFComunity</title>
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
 <nav style="background-color: #0d5448">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo center ">IFComunity</a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
    <a href="./menu-p.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
  </div>
</nav>
<div class="container-fluid">
 <div class="row">
  <div class="col s12 m7">
    <div class="card z-depth-2">
      <div class="card-image">
        <img style="width: 80%; margin: 0 auto;" src="./img/emogi.png">
        <span class="card-title" style="color: black; font-weight: bold;">Alerta!</span>
      </div>
      <div class="card-content">
        <p> Olá <?php echo "$nome "; ?> infelizmente seu registro ainda não foi aprovado, porém seu nome está na lista de espera, volte mais tarde! <br><br> Até mais!</p>
      </div>
      <div class="card-action">
        <a href="./login.php">Voltar</a>
      </div>
    </div>
  </div>
</div>
<footer style="background-color: #0d5448">

 <nav style="background-color: #0d5448">
  <div class="nav-wrapper">
    <p style="margin: 0px !important;" class="center">&copy; Coyright 2010-2020 IF Goiano Campus Morrinhos.</p>
  </div>
</nav>
</footer> 


<script src="js/materialize.min.js"></script>
<script src="alunos.js"></script>
</body>
</html>