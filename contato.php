<?php
$link = mysqli_connect("localhost", "root", "", "recodepro");
if (!$link)
die ("Falha na conexão com o BD " . mysqli_connect_errno());

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    
    $sql= "insert into comentarios(nome, msg) values ('$nome', '$msg')";
    $result = $link->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Contatos</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <!--Menu Principal-->
<?php
    include_once 'menu.html';
?>
<!--Fim do menu-->

<h2> Fale Conosco</h2>
<div class="container-fluid">
    <table class="table">
        <tr>
            <td>
                <img src="./imagens/logowpp.jpg" width="90px">
                <p>(11)972998084</p>
            </td>
            <td>
                <img src="./imagens/logoemail.png" width="40px">
                <p>fullstackjoias@recodepro.com</p>
            </td>
        </tr>
    </table> 

    <form method="post" action ="">
    <div class="form-group">
        <h4>Nome: </h4>
        <input type="text" style="width:400px;" name = "nome">
        <h4>Mensagem:</h4>
        <textarea style="width:400px;" name = "msg"></textarea>
        <input type="submit" name= "submit" value="Enviar">
    </div>
    </form> 

<?php
            $select = "select * from comentarios";
            $imprime = $link->query($select);
            if ($imprime->num_rows > 0){
                while($rows = $imprime->fetch_assoc()){
                  echo "Data: ", $rows['hora'], "<br>";
                  echo "Nome: ", $rows['nome'], "<br>";
                  echo "Mensagem: ", $rows['msg'], "<br>";
                  echo "<hr>";       
                }
            }
            else {
                echo "Nenhuma mensagem ainda :(";
            }
        ?>
</div>

<br><br><br><br><br><br>
<?php
    include_once 'rodape.html';
    ?>
</body>
</html> 
