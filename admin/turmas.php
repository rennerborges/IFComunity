<?php include '../php/verificacaoAdm.php'; 
 include 'includes/headPI.php';
 ?>
<nav style="background-color: #0d5448"> <!-- navbar content here  -->
 <a href="./menuAdm.php" class="brand-logo center">Turmas</a>
 <?php
 include "includes/sideNav.php";
 ?>
</nav>
<style>
  .collapsible-body{
    padding: 0px !important;
  }
</style>
<body>
 <ul class="collapsible" style="margin: 0px;">
  <?php include '../php/init.php'; 
  $sql = "SELECT * FROM aluno WHERE type != 0 GROUP BY turma, curso ORDER BY turma";
  $q = mysqli_query($con,$sql);
  while ($contTurma = mysqlI_fetch_assoc($q)) {
    $turma = $contTurma['turma'];
    $curso = $contTurma['curso'];
    ?>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo "$turma"."° - $curso"; ?></div>
      <div class="collapsible-body">
        <span> 
          <ul class="collection">
            <?php 
            $sql2 = "SELECT * FROM aluno WHERE curso = '$curso' and turma = $turma and type != 0 ORDER BY nome";
            $q2 = mysqli_query($con,$sql2);
            while ($dadosAluno = mysqlI_fetch_assoc($q2)) {
              $matricula = $dadosAluno['matricula'];
              $endereco = $dadosAluno['foto'];
              $primeiroNome = $dadosAluno['nome'];
              $segundoNome = $dadosAluno['sobrenome'];
              $nome = "$primeiroNome "."$segundoNome";

              ?>
              <li class="collection-item avatar">
                <img src="../img/imgAlunos/<?php echo($endereco) ?>" alt="" class="circle">
                <span class="title"><?php echo "$nome"; ?></span>
                <p>Matrícula: <?php echo "$matricula"; ?> <br></p>   
              </li>
            <?php } ?>
          </ul>
        </span>
      </div>
    </li>
  <?php } ?>
</ul>
<script>
  M.AutoInit();
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
</script>
</body>
<?php
include 'includes/footer.php';
?>


