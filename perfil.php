<?php include './php/verificacaoAluno.php'; ?>
<?php 
include "php/init.php";
?>    
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    <a href="./menu-p.php" class="brand-logo center ">Perfil</a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
    <a href="./menu-p.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
  </div>
</nav>
<?php
$matricula = $_SESSION['matricula'];
$sql = "select * from aluno where matricula = $matricula";
$q1 = mysqli_query($con, $sql);

while ($infoAluno = mysqli_fetch_assoc($q1)) {

  ?>
  <div class="row">
   <div style="height: 160px;" class="col s12">
     <div style="background-color: transparent; border-radius: 43%; width: 40%; height: 90%; margin: 0 auto; margin-top: 2%; " class="z-depth-3 ">
       <a href=""><img style="width: 100%;" class="circle " src="./img/imgAlunos/<?php echo $infoAluno['foto'];?>"></a>
     </div>
   </div>
   
   <div style="height: 128px;" class="col s1 tamanho"></div>
   <div style="height: 128px;" class="col s10  tamanho">
    <table>
     
      <tbody>
        <tr>
          <th>Nome</th>
          <td>
            <?php 
            echo ucwords($infoAluno['nome'].' ');
            echo ucwords($infoAluno['sobrenome']);
            ?>
          </td>
        </tr>
        <tr>
          <th>N° de Matricula</th>
          <td>
            <?php 
            echo $infoAluno['matricula'];
            ?>
          </td>
        </tr>
        <tr>
          <th>Série</th>
          <td>
            <?php 
            echo $infoAluno['turma'].' ';
            echo ucwords($infoAluno['curso']);
            ?>
          </td>
        </tr>
        
      </tbody>
      
    </table>
  </div>
  <div style="height: 34vh;" class="col s4  tamanho">
    <div style="background-color: transparent; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; ">
    </div>
  </div>
</div>
<?php
}
?>


<?php
include './admin/includes/footer.php';
?>


<script src="js/materialize.min.js"></script>
<script src="alunos.js"></script>
</body>
</html>