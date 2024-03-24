<?php
require_once "funcoes.php";
if(!isset($_SESSION['idCliente'])){
    header("location:login.php");
    session_destroy();
}
?>