<?php include '../php/verificacaoAdm.php'; ?>
<?php
include "../php/init.php"; 
include 'includes/headPI.php';
include 'includes/navPF.php';

?>
<body>
  <?php
  $matricula = $_SESSION['matricula'];
  $sql = "select * from administrador where matricula = $matricula";
  $q1 = mysqli_query($con, $sql);

  while ($infoAdm = mysqli_fetch_assoc($q1)) {

    ?> 
    <div class="row">
      <div style="height: 160px;" class="col s12 ">
        <div style="background-color: transparent; border-radius: 43%; width: 40%; height: 90%; margin: 0 auto; margin-top: 2%; " class="z-depth-3 ">
          <a href=""><img style="width: 100%;" class="circle " src="../img/adm.png"></a>
        </div>
      </div>
      <div style="height: 128px;" class="col s12  tamanho">
        <table>
          <tbody>
            <tr>
              <td>Nome</td>
              <td>
                <?php 
                echo ucfirst($infoAdm['nome'].' ');
                echo $infoAdm['sobrenome'];
                ?>
              </td>
              <td></td>
            </tr>
            <tr>
              <td>N° de Matricula</td>
              <td>
                <?php 
                echo $infoAdm['matricula'];
                ?>
              </td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="height: 34vh;" class="col s12  tamanho "></div>
    </div>
    <?php
  }
  include 'includes/footer.php';
  ?>
  
</body>
</html>