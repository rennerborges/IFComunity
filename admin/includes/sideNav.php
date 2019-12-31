  <?php 
    include '../php/init.php';
    include 'headLogin.php';
  ?>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
<?php
    $matricula = $_SESSION['matricula'];
    $sql = "select * from administrador where matricula = $matricula";
    $q1 = mysqli_query($con, $sql);

    while ($infoAdm = mysqli_fetch_assoc($q1)) {

  ?>
<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background">
      <img src="../img/fundo.jpeg">
    </div>
    <a href="#user"><img class="circle" src="../img/adm.png"></a>
    <a href="#name"><span class="white-text name"><?php echo ucwords( $infoAdm['nome'].' ');echo ucwords( $infoAdm['sobrenome']);?></span></a>
    <a href="#email"><span class="white-text email"><?php echo ucwords( $infoAdm['matricula']);?></span></a>
  </div></li>
  <li><a href="./faleAdm.php"><i class="material-icons">cloud</i>Fale conosco</a></li>
  <li><a href="./notificacaoAdm.php"><i class="material-icons">notifications_active</i>Criar Notificações</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Outros</a></li>
  <li><a href="../php/destroy.php"><i class="material-icons">exit_to_app</i>Desconectar</a></li>
</ul>
<?php
  }
?>
<script>
  M.AutoInit();
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
</script>