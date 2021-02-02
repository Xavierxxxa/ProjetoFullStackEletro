//Arquivo de configuração de rotas
const { Router } = require('express');

const routes = new Router;

const ComentariosController = require('./Controllers/ComentariosController');
const ProdutosController = require("./Controllers/ProdutosController")

routes.get("/comentarios", ComentariosController.indexAction) //Aqui estamos acessando a action do controller Comentarios.
routes.post("/comentarios", ComentariosController.registrarComentariosAction) //Action de INSERÇÃO
routes.get("/produtos", ProdutosController.indexAction)


module.exports = routes;