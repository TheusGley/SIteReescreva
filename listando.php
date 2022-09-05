<?php

require_once("conexaobd.php");


$consulta = "SELECT 'id','nmarquivo','descricao','arquivo', 'tipo', 'tamanho', 'data' FROM 'redacao_disp'";

$resultado = mysqli_query($consulta);

while($dados = mysqli_fetch_array($resultado)){

    $codigo = $dados ['id'];

    echo "|nome: "      .$dados[nmarquivo];
    echo "|descricao: " .$dados[descricao];
    echo "|arquivo: "   .$dados[arquivo];
    echo "|tipo: "      .$dados[tipo];
    echo "|tamanho: "   .$dados[tamanho];
    echo "|data: "      .$dados[data];

    echo "&gt; &gt;  <a href="ver_arquivo.php?codigo=$codigo"  target="_blank"> ver arquivo </a>";



}
