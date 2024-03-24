<?php 
session_start();
require_once "conexao.php";
$_SESSION['id_produto'] = $_REQUEST['id'];

$sql = "SELECT * from produto WHERE id = $_SESSION[id_produto]";
$sql_produto = mysqli_query($conexao,$sql);
while($linha = mysqli_fetch_array($sql_produto)){
    $_SESSION['nome_produto'] = $linha['nomeproduto'];
    $_SESSION['valor_produto'] = $linha['valor'];
}
header("location: confirmacao.php");
?>