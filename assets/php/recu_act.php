<?php 

$usuario = $_POST['usuario'];
$token = $_POST['token'];

$hostname="localhost:3306";
$username="root";
$password="";
$dbname="contatos_proex";

// queryptoken?
	
try
{
	session_start();
    $PDO = new PDO( 'mysql:host=' . $hostname . ';dbname=' . $dbname, $username, $password );
    $user = $PDO->query($rec_query)->fetch();
   	if($user){
		// recuperar conta 	
   	}else{
		header("Location: ../../views/login.php?ERROR_MESSAGE=Token Inválido); 	
   	}
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}


?>
