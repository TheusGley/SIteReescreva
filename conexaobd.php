<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "db_redacao";
$port = 3306;


$conect = mysqli_connect($host, $user, $pass, $dbname);

mysqli_select_db($conect,"DB_redacao");

try{
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    echo "Conexão com banco de dados realizado com sucesso!";

}  catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}
