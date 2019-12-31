<?php 
include "php/init.php";
$erro = $_GET['erro'];
if ($erro == 1) {
  $conteudo = "Infelizmente não foi possivel efetuar o login, verifique o usuario e a senha, por favor!";
  $caminho = "./login.php";
}else if ($erro == 2) {
  $conteudo = "Infelizmente não foi possivel efetuar o cadastro de ocôrrencia, verifique a matricula informada!";
  $caminho = "./admin/advertencia.php";
}else if ($erro == 3) {
  $conteudo = "Infelizmente não foi possivel efetuar o cadastro da notificação!";
  $caminho = "./admin/notificacaoAdm.php";
}else if ($erro == 4) {
  $conteudo = "Infelizmente não foi possivel efetuar o cadastro do usuario, tente novamente e fique atento aos dados!";
  $caminho = "./cadastroAluno.php";
}else if ($erro == 5) {
  $conteudo = "Infelizmente não foi possivel efetuar a sua opnião/reclamação, tente novamente e fique atento aos dados!";
  $caminho ="./fale.php";
}else{
  header("location: ./admin/menuAdm.php");
}
?>    
<!DOCTYPE html>
<html>
<?php include './includes/headPI.php'; ?>
<body>
 <nav>
  <div class="nav-wrapper" style="background-color: #0d5448;">
    <a href="#!" class="brand-logo center ">IFComunity</a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
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
        <p><?php echo "$conteudo"; ?><br><br> Até mais!</p>
      </div>
    </div>
  </div>
</div>
<div style="height: 9.5vh;" class="col s12"></div>
<?php
include './admin/includes/footer.php';
?>


<script src="js/materialize.min.js"></script>
<script>
  setTimeout(function(){ window.location.href = "<?php echo $caminho?>"; }, 4000);
</script>
<script src="alunos.js"></script>
</body>
</html>