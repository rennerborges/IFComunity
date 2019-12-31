<?php include '../php/verificacaoAdm.php';

include 'includes/headPI.php';
?>
<body>
  <nav style="background-color: #0d5448"> <!-- navbar content here  -->
   <a href="./menuAdm.php" class="brand-logo center">IFComunity</a>
   <?php
   include "includes/sideNav.php";
   ?>
 </nav>
 <div class="row">
  <div style="height: 160px;" class="col s12">
    <!-- perfil -->
    <div style="background-color: transparent; border-radius: 43%; width: 40%; height: 90%; margin: 0 auto; margin-top: 2%; " class="z-depth-3">
     <a href="perfilAdm.php"><img style="width: 100%;" class="circle " src="../img/perfil.png"></a>
   </div>
 </div>
 <div style="height: 128px;" class="col s4  tamanho"><br>
  <div style="background-color: #f2a326; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto; margin-top: 10%; " class="z-depth-3">
    <a href="./advertencia.php"><img style="width: 100%;" class="circle " src="./img/alerta2.png"></a>
  </div>
</div>


<div style="height: 128px;" class="col s4  tamanho"><br>
  <div style="background-color: #1697d1; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto;
  margin-top: 10%; " class="z-depth-3">
  <a href="./turmas.php"><img style="width: 100%;" class="circle" src="./img/turmas.png"></a>
</div>
</div>


<div style="height: 128px;" class="col s4  tamanho"><br>
  <div style="background-color: #6bc259; border-radius: 43%; width: 90%; height: 80%; margin: 0 auto;
  margin-top: 10%; " class="z-depth-3">
  <a href="caixa_verificacao.php"><img style="width: 100%;" class="circle" src="./img/check.png"></a>
</div>
</div>

</div><br><br>
<div style="height: 27.5vh;" class="col s4  tamanho"></div>

<?php
include 'includes/footer.php';
?>
</body>
</html>