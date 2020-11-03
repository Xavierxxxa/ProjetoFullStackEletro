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
</head>
<body>
   <!--Menu Principal-->
<?php
    include_once 'menu.html';
?>
<!--Fim do menu-->

<h2> Fale Conosco</h2>
    <hr>
<table class="tabela2 contato">
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
    <h4>Nome: </h4>
    <input type="text" style="width:400px;" name = "nome">
    <h4>Mensagem:</h4>
    <textarea style="width:400px;" name = "msg"></textarea>
    <input type="submit" name= "submit" value="Enviar">
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
                echo "Nenhum produto cadastrado!";
            }
        ?>

<br><br><br><br><br><br>
<hr>
<footer id="rodapé">
    <h4><p id="formasdepagamento">Formas de pagamento:</p></h4>
    <img src= "imagens/formasdepagamento.jpeg" alt="Formas de pagamento" height="100px" width="200px">
    <p>&copy; Recode Pro</p>
</footer>
</body>
</html> 
