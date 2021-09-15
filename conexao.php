<!-- banco das imagens -->

<?php 

$name = "localhost";
$username = "root";
$password = "";

$db = "teste_database";

$conn = mysqli_connect($name, $username, $password, $db);

if (!$conn) {
	echo "Conexão falhou!";
	exit();
}

?>