<<?php 
require_once("conexaobd.php");


$file_tmp = $_FILES ["file"] ["tmp_name"];

$file_name = $_FILES ["file"] ["name"];

$file_type = $_FILES  ["file"] ["type"];

$file_size = $_FILES  ["file"] ["size"];

$file_error = $_FILES   ["file"] ["error"];



$binario = file_get_contents($file_tmp);



//$binario = mysqli_real_escape_string( $conn,$binario);

$sql = "INSERT INTO redacao_disp (id,nmarquivo, tamanho, tipo) VALUES (null,'$file_name','$file_size','$file_type')";

try{
    mysqli_query ($conect,$sql) or die (mysqli_error($conect));

} catch (Exception $err)
{
    echo " arquivo salvo " . $err->getMessage();
}
?>
