const mongo = require("mongoose");

function connection (){
    mongo.connect("mongodb://localhost/ecommerce", {useNewUrlParser: true, useUnifiedTopology: true})
    .then(()=>{
        console.log("Conexão com o MongoDB bem sucedida")
    }).catch((error)=>{
        console.log(error)
    })
}

module.exports = connection();