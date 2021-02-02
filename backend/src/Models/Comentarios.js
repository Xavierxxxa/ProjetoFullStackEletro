const connection = require("../config/connection");

class Comentarios{
    constructor(){ //definir atributos do bd, estamos representando a tabela por essa classe
        this.id
        this.nome
        this.msg
        this.hora
    }
    getAll(req, res){
        connection.query("SELECT * FROM comentarios", (error, result)=>{
            if(error){
                res.send(error);
            }else{
                res.json(result);
            }
        });
    }

    registrarComentarios(req, res){
        connection.query(`INSERT INTO comentarios(nome, msg) values('${this.nome}', '${this.msg}')`, 
        (error, result)=>{
            if(error){
                res.send(error)
            }res.json(result)
        });
    }
}

module.exports = new Comentarios;