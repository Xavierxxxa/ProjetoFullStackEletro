const produtos = require("../Models/Produtos");

class ProdutosController{ //Nome da classe deve ter o mesmo nome do arquivo
    indexAction(req, res){
        produtos.getAll(req, res)
    }

}

module.exports = new ProdutosController;
