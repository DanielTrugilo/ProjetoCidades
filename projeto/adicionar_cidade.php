<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consulta de Cidades</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
    
        #tamanhoContainer {
            width: 600px;
        }
    </style>

</head>
<body>
    <!-- JS -->
    <script type="text/javascript" scr="js/bootstrap.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Projeto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listar_cidades.php">Listagem de cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Relatórios</a>
            </li>
          </ul>
        </div>
      </nav>
    

    <div class="container" id="tamanhoContainer" style="margin-top: 30px">
        <h4>Formulário de Cadastro de Cidades</h4>
        <form action="_inserir_cidade.php" method="POST" style="margin-top: 20px">
        <form>
            <div class="form-group">
                <label>Código IBGE</label>
                <input type="number" class="form-control" name="codIBGE" placeholder="Digite o código IBGE" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nome da Cidade</label>
                <input type="text" class="form-control" name="nomeCidade" placeholder="Digite o nome da cidade" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select class="form-control" name="listaEstado" required>
                  <?php

                  include 'conexao.php';
                  $sql = "SELECT DISTINCT(listaEstado) FROM cidade ORDER BY listaEstado ASC";
                  $buscar = mysqli_query($conexao,$sql);

                  while ($array = mysqli_fetch_array($buscar)){
                    
                    $listaEstado = $array['listaEstado'];            
                  
                  ?>
                  
                  <option><?php echo $listaEstado ?></option>
                  
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Região</label>
                <select class="form-control" name="listaRegiao" required>
                <?php

                  include 'conexao.php';
                  $sql = "SELECT DISTINCT(listaRegiao) FROM cidade ORDER BY listaRegiao ASC";
                  $buscar = mysqli_query($conexao,$sql);

                  while ($array = mysqli_fetch_array($buscar)){
                    
                    $listaRegiao = $array['listaRegiao'];            

                  ?>

                  <option><?php echo $listaRegiao ?></option>

                  <?php } ?>
                </select>
              </div>
              <div style="text-align: right;">
                <button type="submit"  class="btn btn-primary">Cadastrar</button>
              </div>
        </form>
    </div>


</body>
</html>