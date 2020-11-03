<?php
$link = mysqli_connect("localhost", "root", "", "recodepro");
if (!$link)
die ("Falha na conexão com o BD " . mysqli_connect_errno());
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Produtos disponíveis</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./javascript/functions.js"></script>
</head>

<body>
  <!--Menu Principal-->
<?php
    include_once 'menu.html';
?>
<!--Fim do menu-->
    

<h2>Produtos disponíveis </h2>
<hr>

<div class="categorias" >
    <aside>
    <h3>Categorias</h3>
        <ul>
            <li onclick="exibetodos()">Todos(12)</li>
            <li onclick="exibecategoria('geladeira')">Geladeiras(3)</li>
            <li onclick="exibecategoria('fogao')">Fogões(2)</li>
            <li onclick="exibecategoria('microondas')">Microondas(3)</li>
            <li onclick="exibecategoria('lavaroupa')">Lavadouras de  Roupas(2)</li>
            <li onclick="exibecategoria('lavalouça')">Lava-louças(2)</li>
        </ul>
        </aside>
</div> 

        <?php
            $select = "select * from eletrodomesticos";
            $imprime = $link->query($select);
            if ($imprime->num_rows > 0){
                while($rows = $imprime->fetch_assoc()){
                    ?>
                <!--Aqui vai ficar o código de integração-->
        <?php          
                }
            }
            else {
                echo "Nenhum produto cadastrado!";
            }
        ?>

        <div class="produtos" style = "display:inline-block">
            <div class="eletrodomesticos" id="geladeira" style = "display:inline-block">
            <img src="./imagens/geladeiraduasportas.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p >Geladeira Frost Free Brastemp Side Inverse 540 litros</p>
            <hr>
            <p ><strike>R$ 6.389,00</strike></p>
            <p class="preco">R$ 5.019,00</p>
            </div>


            <div class="eletrodomesticos" id="geladeira" style = "display:inline-block">
            <img src="./imagens/geladeiracinza.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Geladeira Frost Free Consul Prata 400 litros</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 2200,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 2100,00</font>  <!--Preço atual-->
            </div>

        

            <div class="eletrodomesticos" id="geladeira" style = "display:inline-block">
            <img src="./imagens/geladeirabranca.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Geladeira Frost Free Brastemp Branca 390 litros</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 2500,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 2300,00</p>  <!--Preço atual-->
            </div>


            <div class="eletrodomesticos" id="fogao" style = "display:inline-block">
            <img src="./imagens/fogãoquatrobocas.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Fogão de 4 Bocas Atlas- Branco</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 670,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 610,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="fogao" style = "display:inline-block">
            <img src="./imagens/fogãocinza.jpeg" width="120px" onclick="destaque(this)"><br>
            <p>Fogão de 4 Bocas Consul - Inox</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 1400,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 1250,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="microondas" style = "display:inline-block">
            <img src="./imagens/microondasconsul.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Microondas Consul 32 litros - Inox - 220v</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 600,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 450,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="microondas" style = "display:inline-block">
            <img src="./imagens/microondaseletrolux.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Microondas Eletrolux 28 litros - Espelhado - 110v</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 600,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 530,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="microondas" style = "display:inline-block">
            <img src="./imagens/microondasphilco.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Microondas Philco 30 litros - Branco - Bivolt</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 590,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 500,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="lavaroupa" style = "display:inline-block">
            <img src="./imagens/lavaroupa(turbo).jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Lava Roupas Brastemp 11kg - Turbo - Branca</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 1600,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 1400,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="lavaroupa" style = "display:inline-block">
            <img src="./imagens/lavaroupa.jpeg" width="120px" onclick="destaque(this)"><br>
            <p>Lava Roupas Philco 12 kg - Inverter - Branca</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 2000,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 1500,00</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="lavalouça" style = "display:inline-block">
            <img src="./imagens/lavalouça.jpeg" width="120px" onclick="destaque(this)"><br>
            <p>Lava Louça Compacta Brastemp - 8 Serviços -Branca - 110v </p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 1800,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 1500</p>  <!--Preço atual-->
            </div>



            <div class="eletrodomesticos" id="lavalouça" style = "display:inline-block, margin:10px">
            <img src="./imagens/frigobarconsul.jpeg" width="120px" onclick="destaque(this)">
            <br>
            <p>Lava Louça Consul - 14 Serviços - Inox - 220v</p> <!--Nome do produto-->
            <hr>
            <p><strike>R$ 3000,00</strike></p> <!--Preço Anterior-->
            <p class="preco">R$ 2600,00</p>  <!--Preço atual-->
            </div>
        </div>

<br> 
<footer id="rodapé">
    <h4><p id="formasdepagamento">Formas de pagamento:</p></h4>
    <img src= "imagens/formasdepagamento.jpeg" alt="Formas de pagamento" height="100px" width="200px">
    <p>&copy; Recode Pro</p>
</footer>

</body>
</html> 
