<?php

require "Connection.php";

class Produtos
{
    public $cod_prod;
    public $categoria;
    public $descricao;
    public $preco;
    public $precofinal;
    public $imagem;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM recodepro.eletrodomesticos left join  recodepro.comentarios 
        on eletrodomesticos.cod_prod = comentarios.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}