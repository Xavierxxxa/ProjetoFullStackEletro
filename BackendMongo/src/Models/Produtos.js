const { Schema, model } = require("mongoose");

const ProdutoSchema = new Schema({
    nome:{
        type: String,
        require: true    
    },
    msg:{
        type: String,
        require: true
    }
})
//Definição do banco de dados, com os campos e os tipos, sendo que o tipos são passados entre as chaves, como no exemplo acima

const modelo = model("Produtos", ProdutoSchema)
 //passamos como parametro o nome da collection que será criada e em qual Schema ela será armazenada

module.exports = modelo
