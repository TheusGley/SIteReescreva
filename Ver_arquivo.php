<?php

require_once("conexaobd.php");


$codigo =$_GET['id'];

$consulta = "SELECT 'arquivo', 'tipo' FROM 'redacao_disp' WHERE codigo = '$codigo'";

$resultado = mysqli_query($conect,$consulta);



$dados = mysqli_fetch_array(($resultado));
$tipo = $dados ['tipo'];
$arquivo = $dados['arquivo'];


header ("content-type:".$tipo. "" );

echo $arquivo;
?>
