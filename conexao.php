<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "bdsistema";

try {
    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    var_dump($con);//debugar-descobrir o q esta sendo respondido.
} catch (PDOException $e) {
    echo "Conexao falhou:<br>".$e->getMessage();
}