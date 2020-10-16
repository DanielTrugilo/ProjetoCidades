<!DOCTIPE html>
<html>
    <head>
    <title>Listagem de Cidades</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">

    #filtroPesquisa {


      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
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
            <li class="nav-item">
              <a class="nav-link" href="adicionar_cidade.php">Cadastro</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="listar_cidades.php">Listagem de cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Relatórios</a>
            </li>
            </ul>
        </div>
    </nav>



    <div class="container" style="margin-top: 40px">

    <h3>Lista de Cidades</h3>
    <br>

    <input type="text" id="filtroPesquisa" onkeyup="filtroPesquisa()" placeholder="Filtro de busca de cidades" title="Pesquisa">
    
    <table class="table" id="listaTabela">
        <thead>
            <tr class="header">
            <th scope="col">Código IBGE</th>
            <th scope="col">Estado</th>
            <th scope="col">Cidade</th>
            <th scope="col">Região</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
            <tr>
                <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `cidade`";
                    $busca = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($busca)){
                        $codIBGE = $array['codIBGE'];
                        $listaEstado = $array['listaEstado'];
                        $nomeCidade = $array['nomeCidade'];
                        $listaRegiao = $array['listaRegiao'];

                    


                ?>
            <tr>

            <td><?php echo $codIBGE ?> </td>
            <td><?php echo $listaEstado ?> </td>
            <td><?php echo $nomeCidade ?> </td>
            <td><?php echo $listaRegiao ?> </td>
            <td><a class="btn btn-primary btn-sm" href="editar_cidade.php?id=<?php echo $codIBGE ?>" role="button">Editar</a> 
            <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $codIBGE ?>" role="button">Deletar</a></td>
            
            </tr>

            <?php } ?>

            </tr>
        
    </table>




    </div>

<script>
function filtroPesquisa() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filtroPesquisa");
  filter = input.value.toUpperCase();
  table = document.getElementById("listaTabela");
  tr = table.getElementsByTagName("tr");
  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  
}
</script>


</body>
</html>
