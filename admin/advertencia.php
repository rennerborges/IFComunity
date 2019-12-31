<?php include '../php/verificacaoAdm.php'; ?>
<?php
include 'includes/headPI.php';
?>
<body>
  <nav style="background-color: #0d5448"> <!-- navbar content here  -->
    <a href="./menuAdm.php" class="brand-logo center">Advertências</a>
    <?php
    include "./includes/sideNav.php";
    ?>
  </nav>
  <div class="container-fluid"> 
      <form method="POST" action="../php/registrarOcorrencia.php">
        <h2 style="font-size: 30px; margin-left: 3%;">Registre a ocorrência</h2>
        <div class="input-field col s12" style="margin-left: 3%; margin-right: 3%;">
          <input required="required" id="matricula" type="text" name="matricula">
          <label for="matricula">Matrícula</label>
        </div>
        <div style="margin: 3%;">
          <label style="font-size: 18px;">Tipo:</label><br><br>
          <label><input class="with-gap" value="Leve" name="tipoAd" type="radio"/><span>Leve</span></label><br>
          <label><input class="with-gap" value="Media" name="tipoAd" type="radio"/><span>Média</span></label><br>
          <label><input class="with-gap" value="Grave" name="tipoAd" type="radio"/><span>Grave</span></label><br>
          <label><input class="with-gap" value="Gravissima" name="tipoAd" type="radio"/><span>Gravíssima</span></label><br>
          <div class="input-field col s12">
            <textarea required="required" id="icon_prefix2" class="materialize-textarea" name="teste"></textarea>
            <label for="motivo">Motivo</label>
          </div>
        </div>
        <input style="margin: 5%;" type="submit" class="btn" style="background-color: #0d5448 !important;" name="Registrar">
      </form>

  </div>
  <div class="col s12" style="height: 10vh;"></div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
include 'includes/footer.php';
?>



