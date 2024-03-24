<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
            <h1>Projeto PHP + MySQL</h1>
    </header>
    <section class="text">
        <h2>Cadastro do Produto</h2>
    </section>

    <main class="formulario-principal">
    <form action="Cadastro_produto.php" method="POST">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome produto</label>
    <input type="text" class="form-control" id="nome" name="nomeproduto" aria-describedby="nome-help" required>
  </div>
  <div class="mb-3">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor" required>
  </div>
  <div class="botoes">
  <input type="reset" class="btn btn-warning btnForm" value="Cancelar">
  <input type="submit" class="btn btn-primary btnForm" value="Enviar" name="enviar">
</div>
</form>
    </main>
    <?php
    error_reporting(0);
    require_once "conexao.php";
    require_once "funcoes.php";

    if($_POST['enviar']){
      cadastrar_produto($conexao,$_POST['nomeproduto'],$_POST['valor']);
    }


    ?>





    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>