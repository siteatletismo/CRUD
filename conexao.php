<?php
// usado para conectar ao BD
$host = "localhost";
$db_name = "resgatocao";

$username = "root";
$password = "";
try {
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username,
$password);
}
// mostra os erros
catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}
?>

