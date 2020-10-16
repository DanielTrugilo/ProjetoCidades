<?php

include 'conexao.php';

$codIBGE = $_POST['codIBGE'];
$listaEstado = $_POST['listaEstado'];
$nomeCidade = $_POST['nomeCidade'];
$listaRegiao = $_POST['listaRegiao'];

$sql = "UPDATE `cidade` SET `codIBGE`='$codIBGE',`listaEstado`='$listaEstado',`nomeCidade`='$nomeCidade',`listaRegiao`='$listaRegiao' WHERE codIBGE = $codIBGE";

$atualizar = mysqli_query($conexao,$sql);



?>
<html>

<head>
   <!-- CSS -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <style type="text/css">
   </style>
   <div class="container" style="width:400px">
   <center>
   <h3> Atualizado com sucesso</h3>
   <div style ="margin">
    <a href="listar_cidades.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar </a>
   </center>


   </div>
</head>

</html>