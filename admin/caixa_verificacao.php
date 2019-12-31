<?php include '../php/verificacaoAdm.php'; ?>
<?php
include 'includes/headPI.php';
?>
<nav style="background-color: #0d5448"> <!-- navbar content here  -->
 <a href="./menuAdm.php" class="brand-logo center">Verificação</a>
 <?php
 include "includes/sideNav.php";
 ?>
</nav>
<?php
include '../php/init.php';
$sql1 = 'SELECT * FROM aluno WHERE type = 0 ORDER BY PK_aluno DESC';
$q = mysqli_query($con, $sql1);
$row = mysqli_num_rows($q);
if ($row != 0) {

while ($alunos = mysqli_fetch_assoc($q)){
  $matricula = $alunos['matricula'];
  ?>
  <ul class="collection" style="margin: 0px;">
    <li class="collection-item avatar">
      <img src="../img/imgAlunos/<?php echo $alunos['foto'];?>" alt="" class="circle">
      <span class="title"><p>Nome: <?php echo $alunos['nome'];?></p></span>
      <p style="margin-bottom: 2%;">Matricula: <?php echo $alunos['matricula'];?><br>
        <div>
          <div class="left" style="margin-right: 5%;">
            <form action="../php/execucoesVerificacaoTrue.php?matricula=<?php echo($matricula); ?>" method="POST" >
              <button name="true" class="btn" style="background-color: #0d5448" type="submit">Aceitar</button>
            </form>
          </div>
          <div>
            <form action="../php/execucoesVerificacaoFalse.php?matricula=<?php echo($matricula); ?>" method="POST" >
              <button class="btn" style="background-color: #0d5448" type="submit" name="falsee"> Recusar</button>
            </form>
          </div>   
        </div>
      </p>
    </li>
  </ul>
  <?php
}
}else{
?>
<div class="col s12 m7">
    <div class="card z-depth-2">
      <div class="card-image">
        <img style="width: 80%; height: 50%; margin: 0 auto;" src="../img/emogi.png">
        <span class="card-title" style="color: black; font-weight: bold;">Alerta!</span>
      </div>
      <div class="card-content">
        <p> Infelizmente não há alunos para serem verificados agora, volte mais tarde! <br><br> Até mais!</p>
      </div>
      <div class="card-action">
        <a href="../login.php">Voltar</a>
      </div>
    </div>
  </div>
<?php } ?>
<?php
include 'includes/footer.php';
?>