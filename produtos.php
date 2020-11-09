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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="./javascript/functions.js"></script>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
  <!--Menu Principal-->
<?php
    include_once 'menu.html';
?>
<!--Fim do menu-->
    

<h2>Produtos disponíveis </h2>
<hr>

<div class="container-fluid">
<h3>Categorias</h3>
    <div class="row ">
        <div class="col">
            <ul class ="nav flex-column">
                <li class="nav-item" onclick="exibetodos()">Todos(12)</li>
                <li class="nav-item" onclick="exibecategoria('geladeira')">Geladeiras(3)</li>
                <li class="nav-item" onclick="exibecategoria('fogao')">Fogões(2)</li>
                <li class="nav-item" onclick="exibecategoria('microondas')">Microondas(3)</li>
                <li class="nav-item" onclick="exibecategoria('lavaroupa')">Lavadouras de  Roupas(2)</li>
                <li class="nav-item" onclick="exibecategoria('lavalouca')">Lava-louças(2)</li>
            </ul>
        </div>


        <?php
            $select = "select * from eletrodomesticos";
            $imprime = $link->query($select);
            if ($imprime->num_rows > 0){
                while($rows = $imprime->fetch_assoc()){
                    ?>
                <div class="eletrodomesticos col-md-auto" id="<?php echo $rows["categoria"];?>">
                    <img src="<?php echo $rows["imagem"];?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p class="p-0 m-0"><?php echo $rows["descricao"];?></p>
                    <hr>
                    <p class="p-0 m-0"><strike>R$ <?php echo $rows["preco"];?></strike></p>
                    <p class="text-danger m-0 p-0">R$ <?php echo $rows["precofinal"];?></p>
                </div>
                

    
        <?php          
                }
            }
            else {
                echo "Nenhum produto cadastrado!";
            }
        ?>

</div>  

<br> 
<?php
    include_once 'rodape.html';
    ?>

</body>
</html> 
