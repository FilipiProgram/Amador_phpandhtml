<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title><strong>Projeto com base de Estudo - Hcode</strong>></title>
</head>

<body>

<?php

         echo "  " . "Informe sua idade!" . "  ";

if(isset($_POST["valores"])) {
   $valor = $_POST["valores"];
   if($valor < 18){

   	   header('Location:Erro_idade2.php');

   }elseif($valor >= 18 && $valor < 120) {
      
       echo "A idade é de um adulto, vamos continuar";
        header('location: Sistema_de_login.php');
        
   }else{
   	   header('location: Erro_idade.php');
   }



}



 ?>




<form method="POST">

     <input type="text" name="valores">
     <input type="submit">

</body>	


</html>