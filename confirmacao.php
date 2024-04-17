<?php

    error_reporting(0);
    require_once "conexao.php";
    require_once "funcoes.php";
    require_once "protecao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmando compra </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
            <h1>Projeto PHP + MySQL</h1>
    </header>
    <section class="text">
        <h2>Confirmação Pedido</h2>
    </section>

    <main class="principal area-confirmacao">
    <?php 
    $sql = "SELECT nome  from cliente WHERE id = $_SESSION[idCliente]";
    $sql_cliente = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_array($sql_cliente);
    ?>
    <div class="card confirmacao" style="width: 25rem;">
  <div class="card-body card-confirmacao">
    <h4 class="card-title">Comprador: <?php echo $linha['nome'];?> </h4>
    <h5 class="card-title">Produto: <?php echo $_SESSION['nome_produto'];?> </h5>
    <p class="card-title">Valor: <?php echo $_SESSION['valor_produto'];?> </p>
    <form action="confirmacao.php" method="POST"> 
        <input type="submit" class="btn btn-primary" value="Comprar" name="comprar">
    </form>
  </div> 
  <div class="mb-3 cadastrarSe linkConfirmacao "><a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="escolha_produto.php">Voltar </a><a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="logout.php">Cancelar </a>
 
    </main>
    <?php
    if($_POST['comprar']){
        comprar($conexao,$_SESSION['idCliente'],$_SESSION['id_produto']);

    }
    ?>

    <script src="js/acoes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>