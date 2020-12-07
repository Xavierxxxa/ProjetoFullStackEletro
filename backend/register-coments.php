<?php 

require "./Models/Coments.php";

$coment = new Coments;
$coment->nome = $_POST['nome'];
$coment->msg = $_POST['msg'];

$validate = $coment->registerComents();

if ($validate){
    echo json_encode(true);

}else{
    echo json_encode(false);
}