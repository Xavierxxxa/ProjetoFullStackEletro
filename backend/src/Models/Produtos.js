const connection = require("../config/connection");

class Produtos{
    constructor(){ //definir atributos do bd, estamos representando a tabela por essa classe
        this.cod_prod
        this.categoria
        this.imagem
        this.descricao
        this.preco
        this.precofinal
    }
    getAll(req, res){
        connection.query("SELECT * FROM eletrodomesticos", (error, result)=>{
            if(error){
                res.send(error);
            }else{
                res.json(result);
            }
        });
    }
}

module.exports = new Produtos;