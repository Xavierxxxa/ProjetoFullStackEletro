<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Nossas Lojas</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <!--Menu Principal-->
<?php
    include_once 'menu.html';
?>
<!--Fim do menu-->

<h2>Nossas lojas</h2>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th scope="col">Rio de Janeiro</th>
            <th scope="col"> São Paulo</th>
            <th scope="col">Minas Gerais</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Avenida Presidente Vargas, 500</td>
            <td>Avenida Brigadeiro Faria Lima, 4898</td>
            <td>Avenida Álvares Cabral, 690</td>
        </tr>
        <tr>
            <td>10 &ordm; andar</td>
            <td>19 &ordm; andar</td>
            <td>10 &ordm; andar</td>
        </tr>
        <tr>
            <td>Centro</td>
            <td>Pinheiros</td>
            <td>Centro</td>
        </tr>
        <tr>
            <td>(21)43549809</td>
            <td>(11) 58234989</td>
            <td>(31) 34987898</td>
        </tr>
    </tbody>
</table>
<br> <br><br><br><br>
<br><br><br><br>  
<?php
    include_once 'rodape.html';
    ?>

</body>
</html> 
