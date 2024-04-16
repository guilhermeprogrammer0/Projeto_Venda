<?php
session_start();
function cadastrar($c,$nome,$email,$senha){
    $sql_verificar = "SELECT email, senha from cliente WHERE email = '$email'";
    $sql_verificado = mysqli_query($c,$sql_verificar);
    $num_linhas = mysqli_num_rows($sql_verificado);
        if($num_linhas>0){
            ?>
            <script>
                alert("Cliente já cadastrado em nossa base de dados. Faça login!");
            </script>
            <?php
        }
        else{
    $sql_cadastrar = "INSERT INTO cliente values (default,'$nome','$email','$senha')";
    $sql = mysqli_query($c,$sql_cadastrar);
        if($sql){
            ?>
            <script>alert("Cliente Cadastrado com Sucesso");</script>
            <?php
            header("location:login.php");
        }
        else{
            ?>
            <script>alert("Erro ao Cadastrar!");</script>
            <?php
        }
    }
}

function cadastrar_produto($c,$nomeproduto,$valor){
    $sql_cadastrar = "INSERT INTO produto values (default,'$nomeproduto','$valor')";
    $sql = mysqli_query($c,$sql_cadastrar);
    if($sql){
        ?>
        <script>alert("Produto Cadastrado com Sucesso");</script>
        <?php
    }
    else{
        ?>
        <script>alert("Erro ao Cadastrar!");</script>
        <?php
    }
}

function logar($c,$email,$senha){
    $sql_logar = "SELECT * from cliente WHERE email = '$email' AND senha = '$senha'";
    $sql_logado = mysqli_query($c,$sql_logar);
    $num = mysqli_num_rows($sql_logado);
    if($num>0){
        $linha = mysqli_fetch_array($sql_logado)
            $_SESSION['idCliente'] = $linha['id'];  
       header("location:escolha_produto.php");
    }
    else{
        ?>
        <script>alert("E-mail e/ou senha inválidos");</script>
        <?php
    }

}

function comprar($c,$id_cliente,$id_produto){
    $sql_cadastrar = "INSERT INTO venda values (default,'$id_cliente','$id_produto')";
    $sql = mysqli_query($c,$sql_cadastrar);
    if($sql){
        ?>
        <script>alert('Compra efetuada com sucesso!');
        window.location.href = "escolha_produto.php";
        </script>
        <?php
    }
    else{
        ?>
        <script>alert('Erro!');</script>
        <?php
    }
    }


?>