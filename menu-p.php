<?php 
include './php/verificacaoAluno.php'; 
include './php/init.php';
?>
<!DOCTYPE html>
<html>
<?php include './includes/headPI.php'; ?>
<body>
  <nav style="background-color: #0d5448;"> <!-- navbar content here  -->

    <a href="#" class="brand-logo center">IFComunity</a>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <?php
    $matricula = $_SESSION['matricula'];
    $sql = "SELECT * FROM aluno WHERE matricula = $matricula";
    $q1 = mysqli_query($con, $sql);

    $infoAluno = mysqli_fetch_assoc($q1);
    $turma = $infoAluno['turma'];
    $curso = $infoAluno['curso'];
    $idUser = $infoAluno['PK_aluno'];

    $sql3= "SELECT * FROM notificacao WHERE turma = $turma and curso = '$curso' and view = 0 and fk_aluno = $idUser";
    $q3 = mysqli_query($con,$sql3);
    $row = mysqli_num_rows($q3);
    if ($row != 0) {
      ?>
      <a href="./notificacao.php" class="right" style="margin-right: 5%;"><i class="material-icons">notifications_active</i></a>
    <?php } ?>
  </nav>

  <?php
  $matricula = $_SESSION['matricula'];
  $sql = "SELECT * FROM aluno WHERE matricula = $matricula";
  $q1 = mysqli_query($con, $sql);

  while ($infoAluno = mysqli_fetch_assoc($q1)) {
    $turma = $infoAluno['turma'];
    $curso = $infoAluno['curso'];
    $idUser = $infoAluno['PK_aluno'];
    ?>

    <ul id="slide-out" class="sidenav">
      <li><div class="user-view">
        <div class="background">
          <img src="./img/fundo.jpeg">
        </div>
        <a href="#user"><img class="circle" src="./img/imgAlunos/<?php echo $infoAluno['foto'];?>"></a>
        <a href="#name"><span class="white-text name"><?php echo ucwords( $infoAluno['nome'].' ');echo ucwords( $infoAluno['sobrenome']);?></span></a>
        <a href="#email"><span class="white-text email"><?php echo $infoAluno['turma'].' '; echo $infoAluno['curso'];?></span></a>
      </div></li>
      <li><a href="./fale.php"><i class="material-icons">cloud</i>Fale conosco</a></li>
      <li><a href="./notificacao.php"><i class="material-icons">notifications_active</i>Notificações</a></li>
      <li><a class="subheader">Outros</a></li>
      <li><a href="./php/destroy.php"><i class="material-icons">exit_to_app</i>Desconectar</a></li>
    </ul>
    <?php 
  } 
  ?>

  <div class="row">
   <div style="height: 160px;" class="col s12"
   <!-- perfil -->
   <div style="background-color: transparent; border-radius: 43%; width: 40%; height: 90%; margin: 0 auto; margin-top: 2%; " class="z-depth-3">
     <a href="perfil.php"><img style="width: 100%;" class="circle " src="img/perfil.png"></a>
   </div>
 </div>
 <div style="height: 128px;" class="col s4  tamanho">
  <!-- horario -->
  <div style="background-color: #003054; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; " class="z-depth-3">
   <a href="horario.php"><img style="width: 100%;" class="circle " src="./img/relogio.png"></a>
 </div>
</div>
<div style="height: 128px;" class="col s4 tamanho">
  <!-- calendario -->
  <div style="background-color: #1c8bdc; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; " class="z-depth-3">
   <a href="calendario.php"><img style="width: 100%;" class="circle " src="./img/calendario.png"></a>
 </div>
</div>
<div style="height: 128px;" class="col s4 tamanho">
  <!-- cardapio -->
  <div style="background-color: #ec5d32; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; " class="z-depth-3">
   <a href="cardapio.php"><img style="width: 100%;" class="circle " src="./img/cardapio.png"></a>
 </div>
</div>
<!-- Manual do aluno -->
<div style="height: 128px;" class="col s4  tamanho">
  <div style="background-color: #00a1ae; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; " class="z-depth-3">
   <a href="manual-aluno.php"><img style="width: 100%;" class="circle " src="./img/documento.png"></a>
 </div>
</div>
<!-- Advertencia -->
<div style="height: 128px;" class="col s4  tamanho">

 <div style="background-color: #001b5b; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; " class="z-depth-3">
   <a href="colecao.php"><img style="width: 100%;" class="circle " src="./img/alerta.png"></a>
 </div>
</div>

<div style="height: 128px;" class="col s4  tamanho">
 <div style="background-color: transparent; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto;
 margin-top: 10%; " class="z-depth-3">
 <a href="https://www.ifgoiano.edu.br/home/index.php/morrinhos.html"><img style="width: 100%;" class="circle" src="img/logoIF.jpg"></a>
</div>
</div>


<div style="height: 14vh;" class="col s4 tamanho"></div>
</div>


<?php
include './admin/includes/footer.php';
?>


<script src="js/materialize.min.js"></script>
<script src="alunos.js"></script>
</body>
</html>