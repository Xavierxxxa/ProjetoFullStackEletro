const comentarios = require("../Models/Comentarios");

class ComentariosController{ //Nome da classe deve ter o mesmo nome do arquivo
    indexAction(req, res){
        comentarios.getAll(req, res)
    }

    registrarComentariosAction(req, res){
        const { nome, msg } = req.body;

        comentarios.nome  = nome;
        comentarios.msg = msg;
        comentarios.registrarComentarios(req, res);
    }
}

module.exports = new ComentariosController;


/*
Quando trabalhamos com Controller chamamos os metodos de actions
Controller é um intermediário entre views e models
*/