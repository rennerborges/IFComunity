<?php 
include "php/init.php";
$erro = $_GET['erro'];
if ($erro == 1) {
  $conteudo = "Seu login foi efetuado com sucesso, seja bem-vindo!";
  $caminho = "./menu-p.php";
}else if ($erro == 2) {
  $conteudo = "Felizmente foi possivel registrar a ocorrencia!";
  $caminho = "./admin/advertencia.php";
}else if ($erro == 3) {
  $conteudo = "Felizmente foi possivel efetuar o cadastro da notificação!";
  $caminho = "./admin/notificacaoAdm.php";
}else if ($erro == 4) {
  $conteudo = "Felizmente foi possivel efetuar o cadastro do usuario, seja bem-vindo!";
  $caminho = "./login.php";
}else if ($erro == 5) {
  $conteudo = "Felizmente foi possivel efetuar a sua opnião/reclamação, obrigado por nos informar!";
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
        <img style="width: 80%; margin: 0 auto;" src="./img/feliz.jpg">
        <span class="card-title" style="color: black; font-weight: bold;">Alerta!</span>
      </div>
      <div class="card-content">
        <p><?php echo "$conteudo"; ?><br><br> Até mais!</p>
      </div>
    </div>
  </div>
</div>
<div style="height: 13vh;" class="col s12"></div>
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