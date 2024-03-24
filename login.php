<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
            <h1>Projeto PHP + MySQL</h1>
    </header>
    <section class="text">
        <h2>Entrar</h2>
    </section>

    <main class="formulario-principal">
    <form action="login.php" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" required>
  </div>
  <div class="botoes">
  <input type="reset" class="btn btn-warning btnForm" value="Cancelar">
  <input type="submit" class="btn btn-primary btnForm" name="enviar" value="Entrar">
</div>
<div class="mb-3 cadastrarSe ">Não tem Cadastro? <a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="Cadastro_cliente.php">Cadastre - se aqui </a>  </div>
</form>
    </main>
    <?php
    error_reporting(0);
     require_once "conexao.php";
     require_once "funcoes.php";
      if($_POST['enviar']){
       logar($conexao,$_POST['email'],$_POST['senha']);
      }  
            
        
    ?>





    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>