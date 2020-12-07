const Main = () =>{
    const [coments, setComents] = React.useState([]);
    const [render, setRender] = React.useState(false);
    const [msg, setMsg] = React.useState(false);  

    React.useEffect(async ()=>{
        const url = "http://projetos/FullStackJoias/backend/";
        const response = await fetch(url);
        setComents(await response.json());
    }, [render]);

    async function registerComents(event){
        event.preventDefault();

        let formData = new FormData(event.target);

        const url = "http://projetos/FullStackJoias/backend/register-coments.php";

        fetch(url,{
            method: "POST",
            body: formData
        }).then((response)=> response.json()).then((dados)=>{
            setRender(!render);
            setMsg(dados);

            setTimeout(()=>{
                setMsg(false)
            }, 3000);
        });
    }

    return(
        <div className="container">
            <table class="table">
                <tr>
                    <td>
                        <img src="./imagens/logowpp.jpg" width="90px"/>
                        <p>(11)972998084</p>
                    </td>
                    <td>
                        <img src="./imagens/logoemail.png" width="40px"/>
                        <p>fullstackjoias@recodepro.com</p>
                    </td>
                </tr>
            </table>
            <div className="card">
                <form onSubmit={registerComents}>
                    <input className="form-control mt-2" type="text" name="nome" placeholder="Digite seu nome aqui"/>    
                    <textarea className="form-control mt-2" name="msg" id="msg" cols="30" rows="10" placeholder="Elogios, críticas, dúvidas"></textarea>
                    <button className="btn btn-info w-100 mt-2" >Enviar Mensagem</button>
                </form>    
            </div>  

            {
                msg && <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
                    Mensagem enviada com sucesso!
                </div>
            }
            <h5>Avaliações: </h5>
            {coments.map((elements) =>{
                return(
                    <div className="card">
                        <div className="card-header">
                            Nome: {elements.nome}
                        </div>
                        <div className="card-body">
                            Mensagem: {elements.msg} <br/>
                            Data: {elements.hora}
                        </div>
                    </div>
                )
            })}     
        </div>
    );
}