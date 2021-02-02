const Main = () =>{
    const [coments, setComents] = React.useState([]);
    const [render, setRender] = React.useState(false);
    const [msg, setMsg] = React.useState(false);  
    const [message, setMessage] = React.useState('');
    const [name, setName] = React.useState('');

    React.useEffect(async ()=>{ //Listar as mensagens
        const url = "http://localhost:3333/comentarios"; //Teste com NODEJS
        const response = await fetch(url);
        setComents(await response.json());
    }, [render]);

    async function registerComents(event){   //Enviar as mensagens
        event.preventDefault();

        let formData = {
            nome: name,
            msg: message,
        };

        const url = "http://localhost:3333/comentarios"; //PHP: http://projetos/FullStackJoias/backend/register-coments.php

        fetch(url,{
            method: "POST",
            headers: { "Content-Type": "application/json"}, //
            body: JSON.stringify(formData) //Função que converte os resultados JSON para valores JavaScript 
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
            <div className="row">
                <div className="col">
                <div className="card">
                        <form onSubmit={registerComents}>
                            <input className="form-control mt-2" type="text" name={name} placeholder="Digite seu nome aqui"  onChange={event=>setName(event.target.value)}/> 
                            <textarea className="form-control mt-2" name={message} id="msg" cols="30" rows="4" placeholder="Elogios, críticas, dúvidas" onChange={event=>setMessage(event.target.value)} ></textarea>
                            <button className="btn btn-info w-100 mt-2" >Enviar Mensagem</button>
                        </form>    
                    </div>  

                    {
                        msg && <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
                            Mensagem enviada com sucesso!
                        </div>
                    }
                </div>
                <div className="col">
                    <h5 className="text-center">Avaliações: </h5>
                    {coments.map((elements) =>{
                        return(
                            <div className="card bg-secondary text-white border-light">
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
            </div>         
        </div>
    );
}