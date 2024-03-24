<?php
    require_once "conexao.php";
    require_once "funcoes.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
            <h1>Projeto PHP + MySQL</h1>
    </header>
    <section class="text">
        <h2>Pedidos</h2>
    </section>

    <main class="principal">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT cliente.nome, produto.nomeproduto, produto.valor from cliente inner join venda 
    on  cliente.id = venda.id_cliente inner join produto
    on produto.id = venda.id_produto";
    $sql_exibir = mysqli_query($conexao,$sql);
    while($linha = mysqli_fetch_array($sql_exibir)){
        ?>
        <tr>
      <td><?php echo $linha['nome'];?></td>
      <td><?php echo $linha['nomeproduto'];?></td>
      <td><?php echo $linha['valor'];?></td>
     
        </tr><?php
    }

    ?>
    
  </tbody>
</table>

    </script>











        <script src="js/acoes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>