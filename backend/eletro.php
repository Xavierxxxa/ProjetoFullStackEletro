<?php

require "./Models/Produtos.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON 

$produtos = Produtos::getAll();

echo json_encode($produtos);