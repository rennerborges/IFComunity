<?php

	include "init.php";
	
	//var_dump($_POST);
	// var_dump($_GET);
	if (isset($_POST['cadastrar'])):

	
		$nome = $_POST['NomeAluno'];
		$sobreNome = $_POST['sobreNome'];
		$senha = md5($_POST['Senha']);
		$matricula = $_POST['matriculaAluno'];
		$curso = $_POST['curso'];
		$turma = $_POST['turma'];
		$foto = $_POST['arquivo'];
		
		
endif;

			$arquivo 	= $_FILES['arquivo']['name'];
			
			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = '../img/imgAlunos/';
			
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}
			
			//Faz a verificação da extensao do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			$nome_final = time() . "." . $extensao;
			
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/IFComunity/cadastroAluno.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extensão inválida.\");
					</script>
				";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/IFComunity/cadastroAluno.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				echo $_UP['pasta']. $nome_final;
				$destino = $_UP['pasta']. $nome_final;
				move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino);	
			}
			$sql = $con->query("INSERT INTO aluno(nome,sobrenome,matricula,senha,curso,turma,foto) VALUES('$nome','$sobreNome','$matricula','$senha','$curso','$turma','$nome_final')");//or die()
		
		if ($sql === TRUE) {
			header("location: ../sucesso.php?erro=4");
		}else{
			echo "Erro enesperado tente novamente!!!";
			header("location: ../cadastroAluno.php");
		}

			
?>