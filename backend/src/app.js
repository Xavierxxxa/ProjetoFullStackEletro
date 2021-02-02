//Arquivo de configurações da aplicação
const express = require("express");
const cors = require("cors");

const routes = require("./routes");

class App{
    constructor(){
        this.server = express();
        this.middlewares();
        this.routes();
    }

    middlewares(){
        this.server.use(express.json()) //Recebe os dados como JSON
        this.server.use(cors());
    }

    routes(){
        this.server.use(routes) //Incorporando as rotas dentro de server
    }
}

const app = new App;

module.exports = app.server
