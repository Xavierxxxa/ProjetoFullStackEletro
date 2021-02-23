const app = require("./src/config/server")
const connection = require("./src/config/connection")
const Coments = require("./src/Models/Coments");



//Select
app.get("/comentarios", async (req, res)=>{
    const resultado = await Coments.find()

    res.json(resultado)
})
 
app.post("/comentarios", (req, res) =>{
    const newComents = {
        nome: req.body.nome,
        msg: req.body.msg
    }

    new Coments(newComents).save().then(()=>{
        res.json("Comentario registrado")
    }).catch((err) => {
        res.json("Erro ao registrar comentário")
    })
})

/* Update =>
app.put("/:id", async (req, res)=>{
    const { id } = req.params
    const {nome, preco} = req.body

    // 1 - Condição, 2 - Campos a serem atualizados
    let resultado = await Produtos.updateOne({_id: id}, {
        nome, preco
    })

    res.json(resultado)
})

Delete => 
app.delete("/", async (req, res)=>{
    const { id } = req.body

    let resultado = await Produtos.deleteOne({_id: id})

    res.json(
        {
        resultado
    })
})

app.post("/", async (req, res)=>{
    const { nome, msg } = req.body;
    let resultado = await Coments.create({ nome })
    res.json(resultado)
})

*/
