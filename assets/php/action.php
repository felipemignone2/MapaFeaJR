<?php 

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$hostname="localhost:3306";
$username="root";
$password="";
$dbname="contatos_proex";

$login_query = "SELECT * FROM `usuarios`  WHERE login_usuario = '" . $usuario . "' AND senha_usuario = '". $senha ."'";

echo "CONECTANDO COM O BANCO";
	
try
{
	session_start();
    $PDO = new PDO( 'mysql:host=' . $hostname . ';dbname=' . $dbname, $username, $password );
    $user = $PDO->query($login_query)->fetch();
   	if($user){
		$_SESSION["user"]=$user;
		header("Location: ../../views/map/map.php"); 	
   	}else{
   		session_destroy();
		header("Location: ../../views/login.php?ERROR_MESSAGE=Login e/ou password inválido"); 	
   	}
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}


?>
