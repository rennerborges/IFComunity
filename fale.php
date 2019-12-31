<?php include './php/verificacaoAluno.php'; ?>
<?php 
include "php/init.php";
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
  <div style="margin: 5%;">
    <h2 style="font-size: 25px;">Fale com Unidade de apoio ao estudante...</h2>
    <form action="./php/inserirFale.php" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <textarea required="required" id="textarea1" class="materialize-textarea" name="conteudo"></textarea>
            <label for="textarea1">Conteúdo</label>
          </div>
        </div>
        <input  type="submit" class="btn" style="background-color: #0d5448;" value="Enviar">
      </form>
    </div>
  </div>
  <div class="col s12" style="height: 41vh;"></div>
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