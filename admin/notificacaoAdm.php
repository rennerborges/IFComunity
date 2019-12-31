<?php include '../php/verificacaoAdm.php'; ?>
<?php
include '../php/init.php';
include 'includes/headLogin.php';
?>
<nav>
  <div class="nav-wrapper" style="background-color: #0d5448">
    <a href="./menuAdm.php" class="brand-logo center ">Notificação</a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
    
    <a href="./menuAdm.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
  </div>
</nav>
<body>
  <br>
  <div class="container">

    <div class="row">
      <form name="CriarNot" class="col s12" action="../php/criarNotificacao.php" method="POST" id="formulario" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix" style="color: black;">mode_edit</i>
            <textarea required="required" placeholder="Conteúdo" class="materialize-textarea" name="conteudo"></textarea>
          </div>
        </div>
        
        
        <p>
          <label>
            <input name="curso" type="radio" value="INF" >
            <span>Informática</span>
          </label>
        </p>
        <p>
          <label>
            <input  name="curso" type="radio" value="ALI"  >
            <span>Alimentos</span>
          </label>
        </p>
        <p>
          <label>
            <input name="curso" type="radio" value="API"  >
            <span>Agropecuária</span>
          </label>
        </p>
        <p>
          <label>
            <input name="curso" type="radio" value="TODOS"  >
            <span>Todos</span>
          </label>
        </p>

        <br>
        

        <p>
          <label>
            <input name="turma" type="radio" value="1" />
            <span>1° Ano</span>
          </label>
        </p>
        <p>
          <label>
            <input  name="turma" type="radio" value="2"  />
            <span>2° Ano</span>
          </label>
        </p>
        <p>
          <label>
            <input name="turma" type="radio" value="3" />
            <span>3° Ano</span>
          </label>
        </p>
        <label>
          <input name="turma" type="radio" value="0"  >
          <span>Todos</span>
        </label>
      </p>

      <br>


      <button class="btn" style="background-color: #0d5448" type="submit" name="notificar";>ENVIAR
        <i class="material-icons right">send</i>
      </button>
    </div>

  </div>
</form>
</div>
</div>


<div style="height: 50px;" class="col s4"></div>
<?php
include 'includes/footer.php';
?>

</body>
</html>
