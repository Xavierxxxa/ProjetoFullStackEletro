<?php

require "Connection.php";

class Coments
{
    public $id;
    public $nome;
    public $msg;
    public $hora;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM recodepro.eletrodomesticos join  recodepro.comentarios 
        on eletrodomesticos.cod_prod = comentarios.id;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerComents()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO comentarios (nome, msg) values ('$this->nome', '$this->msg')");

        if ($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

}