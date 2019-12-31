<?php include './php/verificacaoAluno.php'; ?>
<!DOCTYPE html>
<html>
<head>
 <title>Calendario</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="stylesheet"href="alunos.css">
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="shortcut icon" href="./img/favicon.ico">
 <link rel="shortcut icon" href="./img/favicon.ico">
</head>
<body>
	<div style="height: 100vh; width:100%; ">
		<div style="height: 10%; width: 100%; ">
     <nav style="background-color: #0d5448;"> <!-- navbar content here  -->
       <a href="./menu-p.php" class="brand-logo center">Calendario</a>	
       <a href="./menu-p.php"><i style="margin-left: 2%;" class="material-icons medium">arrow_back</i></a>
       <div style="height: 90px;" class="col s4 tamanho">
        
       </div>
     </nav>

   </div>
   <div style="height: 90%; width: 100%; ">
     <iframe src=https://drive.google.com/embeddedfolderview?id=0ByrNWxscYVgISkx5VEtOd1BDbWM&amp;;usp#list" style="width:100%;height:100%;"frameborder="0"	></iframe>
   </div>
 </div>
 
 <script src="js/materialize.min.js"></script>
 <script src="alunos.js"></script>
</body>
</html>