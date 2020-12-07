<?php

require "./Models/Coments.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON 

$coments = Coments::getAll();

echo json_encode($coments);