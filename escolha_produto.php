<?php
error_reporting(0);
require_once "conexao.php";
require_once "protecao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolher Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
            <h1>Projeto PHP + MySQL</h1>
    </header>
    <section class="text">
        <h2>Produtos</h2>
    </section>
    <main class="principal">
    <?php
    $sql = "SELECT * FROM produto";
    $sql_exibir = mysqli_query($conexao,$sql);
  while($linha = mysqli_fetch_array($sql_exibir)){     
        ?>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $linha['nomeproduto'];?></h5>
    <p class="card-text"> <?php echo $linha['valor'];?></p>
    <button onclick="comprar(<?php echo $linha['id'];?>)" class="btn btn-primary">Pedir</a>

  </div>
</div>
<?php }?>

    </main>
    <div class="mb-3 cadastrarSe "><a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="logout.php">Cancelar </a>


   







        <script src="js/acoes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>