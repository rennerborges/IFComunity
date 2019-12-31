 <?php include './php/verificacaoLogin.php'; ?>
 <?php
 include './includes/headLogin.php';
 include './includes/navLogin.php';
 ?>
 <body>
  <div class="container-fluid">
    <h2 style="text-align: center; font-size: 30px; margin-left: 4%;" class="left">Bem vindo!</h2>
    <div class="row" style="height: 79vh;">

      <form name="LoginAdmin" class="col s12" action="./php/execucoesLogin.php" method="POST">

        <div class="row">
          <div class="input-field col s12">

            <input required="required" id="matricula" type="text" name="matricula">
            <label for="matricula">Matricula</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input required="required" id="password" type="password" name="senha">
            <label for="password">Senha</label>
          </div>
        </div>
        <input type="submit" class="btn" style="background-color: #0d5448">
      </form>
    </div>
  </div>
  <?php
  include './admin/includes/footer.php';
  ?>
</div>
</body>
</html>