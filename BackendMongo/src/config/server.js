const express = require("express");
const cors = require("cors")
const bodyParser = require('body-parser');

const app = express();
app.use(cors());
app.use(express.json()) // Informando ao app que receberá informações em json do cliente

app.use(bodyParser.urlencoded({extended: true}))
app.use(bodyParser.json())

const port = 3020
app.listen(port, ()=>{
    console.log("Servidor rodado em http://localhost:" + port)
})

module.exports = app