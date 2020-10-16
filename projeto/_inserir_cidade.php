<?php

include 'conexao.php';

$codIBGE = $_POST['codIBGE'];
$listaEstado = $_POST['listaEstado'];
$nomeCidade = $_POST['nomeCidade'];
$listaRegiao = $_POST['listaRegiao'];

$sql = "INSERT INTO `cidade`(`codIBGE`, `listaEstado`, `nomeCidade`, `listaRegiao`) VALUES ($codIBGE,'$listaEstado','$nomeCidade','$listaRegiao')";

$inserir = mysqli_query($conexao,$sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 30px">
<center>
    <h4>Cidade cadastrada com sucesso</h4>
    <div style="padding-top: 30px">
        <center>
        <a href="index.php" role="button" class="btn btn-primary">Cadastrar uma nova cidade</a>
        </center>
    </div>
</center>
</div>

