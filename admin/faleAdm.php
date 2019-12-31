<?php include '../php/verificacaoAdm.php'; ?>
<?php
include 'includes/headPI.php';
?>
<body>
  <nav style="background-color: #0d5448">
    <a href="./menuAdm.php" class="brand-logo center">Fale conosco</a>
    <?php
    include "./includes/sideNav.php";
    ?>
  </nav>
  <!-- Conteudo -->
  <div class="container-fluid">
      <div class="col s12" style="padding: 0px !important;">
        <ul class="tabs">
          <li class="tab col s3"><a href="#test1">Não lidos</a></li>
          <li class="tab col s3"><a href="#test2">Lidos</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12" style="padding:0px !important;">
        <!-- Conteudo da mensagem -->
        <ul class="collection" style="margin: 0px !important;">
          <?php 
            $sql = "SELECT * FROM fale WHERE view = 0 ORDER BY PK_fale DESC";
            $q = mysqli_query($con,$sql);
            while ($dadosView = mysqli_fetch_array($q)) {
              $idUser = $dadosView['FK_aluno'];
              $idFale = $dadosView['PK_fale'];
              $sql2 = "SELECT * FROM aluno WHERE PK_aluno = $idUser";
              $q2 = mysqli_query($con,$sql2);
              $dadosUser = mysqli_fetch_assoc($q2);
              $primeiroNome = $dadosUser['nome'];
              $segundoNome = $dadosUser['sobrenome'];
              $foto = $dadosUser['foto'];
              $nome = "$primeiroNome "."$segundoNome";
              $conteudo = $dadosView['conteudo'];
              $data = $dadosView['data'];
            
          ?>
          <li class="collection-item avatar">
            <img src="../img/imgAlunos/<?php echo $foto; ?>" alt="" class="circle">
            <span class="title" style="font-weight: bold;"><?php echo "$nome"; ?></span>
            <p><?php echo "$data"; ?><br>
              <?php echo "$conteudo"; ?>
           </p>
           <a href="../php/updateFale.php?id=<?php echo $idFale; ?>" class="secondary-content"><i class="material-icons">visibility</i></a>
         </li>
       <?php } ?>
 </ul>
</div>
<div id="test2" class="col s12" style="padding:0px !important;">
  <!-- Conteudo da mensagem -->
        <ul class="collection" style="margin: 0px !important;">
          <?php 
            $sql = "SELECT * FROM fale WHERE view = 1 ORDER BY PK_fale DESC";
            $q = mysqli_query($con,$sql);
            while ($dadosView = mysqli_fetch_array($q)) {
              $idUser = $dadosView['FK_aluno'];
              $sql2 = "SELECT * FROM aluno WHERE PK_aluno = $idUser";
              $q2 = mysqli_query($con,$sql2);
              $dadosUser = mysqli_fetch_assoc($q2);
              $primeiroNome = $dadosUser['nome'];
              $segundoNome = $dadosUser['sobrenome'];
              $foto = $dadosUser['foto'];
              $nome = "$primeiroNome "."$segundoNome";
              $conteudo = $dadosView['conteudo'];
              $data = $dadosView['data'];
            
          ?>
          <li class="collection-item avatar">
            <img src="../img/imgAlunos/<?php echo $foto; ?>" alt="" class="circle">
            <span class="title" style="font-weight: bold;"><?php echo "$nome"; ?></span>
            <p><?php echo "$data"; ?><br>
              <?php echo "$conteudo"; ?>
           </p>
         </li>
       <?php } ?>
 </ul>
</div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  M.AutoInit();
  var instance = M.Tabs.init(el, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>
</body>
</html>
<?php
include 'includes/footer.php';
?>
