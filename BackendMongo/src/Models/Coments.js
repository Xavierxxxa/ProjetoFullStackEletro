const { Schema, model } = require("mongoose");

const ComentsSchema = new Schema({
    nome:{
        type: String
    },
    msg:{
        type: String
    },
    date:{
        type: Date,
        default: Date.now()
    }
})

const modelo = model("Coments", ComentsSchema)

module.exports = modelo;
