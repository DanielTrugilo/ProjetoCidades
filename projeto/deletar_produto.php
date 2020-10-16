<?php

include 'conexao.php';

$codIBGE = $_GET['id'];

$sql = "DELETE FROM `cidade` WHERE codIBGE = $codIBGE";

$deletar = mysqli_query($conexao,$sql);


?>

<html>

<head>
   <!-- CSS -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <style type="text/css">
   </style>
   <div class="container" style="width:400px">
   <center>
   <h3> Deletado com sucesso</h3>
   <div style ="margin">
    <a href="listar_cidades.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar </a>
   </center>


   </div>
</head>

</html>