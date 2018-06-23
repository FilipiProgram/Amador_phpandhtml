<?php
require_once("Configurações/ConfigProjeto02.php");
?>
<head>
	<meta charset="UTF-8">
<title><strong>Sistema de Login e Cadastro</strong></title>

</head>


<body>
<?php
$login = "User"; 
$senha = "User";

if(isset($_POST["login"]) and ($_POST["senha"])) {
//echo = $_POST["login"] . <br>;
//echo = $_POST["senha"];
   if(($_POST["login"]) == $login and ($_POST["senha"] == $senha)) {

       echo "O login foi efetuado com sucesso! Vamos prosseguir";
        header('Location: Sistema_ajuda.php');
   }else{

        header('Location:Erro_login.php');

   }

}





?>

<form method="POST">
	<input type="text" name="login"/>
	<input type="text" name="senha"/>
	<input type="submit">
</form>

</body>