<!-- banco dos videos -->


<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "teste_database";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Conexão falhou!";
	exit();
}

?>