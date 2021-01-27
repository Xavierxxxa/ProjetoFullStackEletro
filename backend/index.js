const express = require("express"), //IMPORTAÇÕES: EXPRESS, CORS, MYSQL
    server = express(),
    cors = require("cors"),
    mysql = require("mysql");

const connection = require('./Index/config/database');
const database = connection();

server.use(cors()); //Permite a leitura de fontes externas
server.use(express.json()); //Lê dados em json
//Construção de rotas:
server.get("/", (req, res) =>{ //Raiz
    res.end("<html><h1> Hello world </h1> </html>")
})

server.get('/produtos', (req, res)=>{ //Retorna os produtos da tabela eletrodomesticos
    const sql = "SELECT * FROM recodepro.eletrodomesticos left join  recodepro.comentarios on eletrodomesticos.cod_prod = comentarios.id";
    database.query(sql, (error, results) =>{ //chama o banco de dados com o método query, e dentro dessa query passamos o comando sql
        if(error){ //Tratamento de erros
            return error; //se der erro
        }res.json(results) // retorna os dados do bd em json
    })
})

server.get('/comentarios', (req, res)=>{
    const sql = "SELECT * FROM  recodepro.comentarios;";
    database.query(sql, (error, results) =>{
        if(error){
            return error;
        }res.json(results)
    })
})

server.post('/comentarios', (req, res)=>{
    const {nome, msg} = req.body; //Desestruturação do corpo da requisiçao em dois elementos que iremos enviar ao bd
    const sql = `INSERT INTO comentarios (nome, msg) values ('${nome}', '${msg}')`;
    database.query(sql, (error, results) =>{
        if(error){
            return error;
        }res.json(results)
    })

})


server.listen(5000, ()=>{ //Indica qual porta o server irá rodar.
    console.log("Server on")
})
