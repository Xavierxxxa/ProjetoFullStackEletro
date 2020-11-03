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
            <li onclick="exibecategoria('lavalouca')">Lava-louças(2)</li>
        </ul>
        </aside>
</div> 

        <?php
            $select = "select * from eletrodomesticos";
            $imprime = $link->query($select);
            if ($imprime->num_rows > 0){
                while($rows = $imprime->fetch_assoc()){
                    ?>
                <div class="eletrodomesticos" id="<?php echo $rows["categoria"];?>" style = "display:inline-block; margin:10px">
                    <img src="<?php echo $rows["imagem"];?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p><?php echo $rows["descricao"];?></p>
                    <hr>
                    <p><strike>R$ <?php echo $rows["preco"];?></strike></p>
                    <p class="preco">R$ <?php echo $rows["precofinal"];?></p>
                </div>
        <?php          
                }
            }
            else {
                echo "Nenhum produto cadastrado!";
            }
        ?>

       

<br> 
<footer id="rodapé">
    <h4><p id="formasdepagamento">Formas de pagamento:</p></h4>
    <img src= "imagens/formasdepagamento.jpeg" alt="Formas de pagamento" height="100px" width="200px">
    <p>&copy; Recode Pro</p>
</footer>

</body>
</html> 
