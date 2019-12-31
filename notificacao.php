<?php include './php/verificacaoAluno.php'; ?>
<?php 
include "php/init.php";
?>    
<!DOCTYPE html>
<html>
<?php include './includes/headPI.php'; ?>
<body>
 <nav>
  <div class="nav-wrapper" style="background-color: #0d5448;">
    <a href="./menu-p.php" class="brand-logo center ">Notificação</a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
    <a href="./menu-p.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
  </div>
</nav>
<!-- Notificacões -->
<ul class="collection" style="margin: 0px !important;">
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
    while ($conteudo = mysqli_fetch_assoc($q3)) {
      $conteudoNotificacao = $conteudo['conteudo'];
      $idNotificacao = $conteudo['PK_notificacao'];

      ?>
      <div class="row">
        <div class="col s10">
          <li class="collection-item">
            <span class="title" style="font-weight: bold;">Atenção!</span><br>
            <?php echo "$conteudoNotificacao"; ?>
          </li>
        </div><br>
        <div class="col s2">
          <a href="./php/apagarNotificacao.php?id=<?php echo($idNotificacao); ?>" class="secondary-content"><i class="material-icons">close</i></a>
        </div>
      </div>
      <div class="divider"></div>
    <?php  }}else{ ?>
     <div class="col s12 m7">
      <div class="card z-depth-2">
        <div class="card-image">
          <img style="width: 80%; margin: 0 auto;" src="./img/emogi.png">
          <span class="card-title" style="color: black; font-weight: bold;">Alerta!</span>
        </div>
        <div class="card-content">
          <p>Infelizmente você ainda não possui notificações, mas não fique triste!<br><br> Até mais!</p>
        </div>
        <div class="card-action">
          <a href="./login.php">Voltar</a>
        </div>
      </div>
    </div>
    <div class="col s12" style="height: 2vh;"></div>
  <?php } ?>
</ul>

<?php
include './admin/includes/footer.php';
?>


<script src="js/materialize.min.js"></script>
<script src="alunos.js"></script>
</body>
</html>