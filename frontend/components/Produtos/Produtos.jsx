const Produtos = () =>{
    const [produtos, setProdutos] = React.useState([]);

    React.useEffect(async ()=>{
        const url = "http://projetos/FullStackJoias/backend/eletro.php";
        const response = await fetch(url);
        setProdutos(await response.json());
    }, []);

    function exibir_todos() {
        let elementos = document.getElementsByClassName('eletro');
        for(let i=0; i<elementos.length; i++){
            elementos[i].style="display:inline-block";
        }
    }

    function exibir_categorias(categorias) {
        let elementos = document.getElementsByClassName('eletro');
        for(let i = 0; i < elementos.length; i++){
            if (categorias === elementos[i].children[0].id)
                elementos[i].style="display: inline-block";
            else
                elementos[i].style="display:none";
        }
    }


    const aumentar = (event) => {
        if (event.target.style.width === "200px") {
            event.target.style.width = "120px";
            event.target.style.height = "120px";
        }
        else {
            event.target.style.width = "200px";
            event.target.style.height = "200px";
        }
    }
    
    const diminuir = (event) => {
        if (event.target.style.width === "120px") {
            event.target.style.width = "200px";
            event.target.style.height = "200px";
        }
        else {
            event.target.style.width = "120px";
            event.target.style.height = "120px";
        }
    }


    return (
        <div className="container-fluid">
            <div class="col bg-light ">
                <p className = "m-0 text-primary">Categorias</p>
                <ul class ="nav flex-column">
                    <li class="nav-item"  onClick={exibir_todos}>Todos(12)</li>
                    <li class="nav-item" onClick={() => exibir_categorias('geladeira')}>Geladeiras(3)</li>
                    <li class="nav-item" onClick={() => exibir_categorias('fogao')}>Fogões(2)</li>
                    <li class="nav-item" onClick={() => exibir_categorias('microondas')}>Microondas(3)</li>
                    <li class="nav-item" onClick={() => exibir_categorias('lavaroupa')}>Lavadouras de  Roupas(2)</li>
                    <li class="nav-item" onClick={() => exibir_categorias('lavalouca')}>Lava-louças(2)</li>
                </ul>
            </div>
            <hr/>
            <div className="row">
            {produtos.map((elements)=>{
                return (
                    <div className="eletro container col-md-4 ">
                        <div  id ={elements.categoria}  key = {elements.cod_prod}>
                        <img src={elements.imagem} alt="" width="120px" height="120px" onClick={aumentar}  onClick={diminuir}/>
                        <p>{elements.descricao}</p>
                        <hr/>
                        <p className = "p-0 m-0"><strike>R$ {elements.preco}</strike></p>
                        <p className ="text-danger m-0 p-0">R$ {elements.precofinal}</p>
                        </div>
                    </div>
                )
            }) }
            
        </div>
        </div>
    )
}
