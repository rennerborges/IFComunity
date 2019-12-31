 <?php include './php/verificacaoLogin.php'; ?>
 <?php include './includes/headPI.php'; ?>
 <?php
 include 'includes/navCad.php';
 ?>
 <br>
 <body>
 	<div class="container">

 		<div class="row">
 			<form name="CadastroAluno" class="col s12" action="./php/execucoesAluno.php " method="POST" id="formulario" enctype="multipart/form-data">
 				<div class="row">
 					<div class="input-field col s6">
 						<input placeholder="Placeholder" id="first_name" type="text" class="validate" name="NomeAluno">
 						<label for="first_name">Nome</label>
 					</div>
 					<div class="input-field col s6">
 						<input placeholder="Placeholder" id="last_name" type="text" class="validate" name="sobreNome">
 						<label for="last_name">Sobrenome</label>
 					</div>
 				</div>
 				<div class="row">
 					<div class="input-field col s12">
 						<input id="password" type="password" class="validate" name="Senha" >
 						<label for="password">Senha</label>
 					</div>
 				</div>
 				<div class="row">
 					<div class="input-field col s12">
 						<input id="matricula" type="text" class="validate" name="matriculaAluno">
 						<label for="matricula">Nº de Matricula</label>
 					</div>
 				</div>

 				<p>
 					<label >
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
 				Imagem: <input name="arquivo" type="file" accept="image/*"/><br><br>

 				<br>


 				<button class="btn" style="background-color: #0d5448" type="submit" name="cadastrar" ;>NEXT
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
