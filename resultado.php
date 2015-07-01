
  <?php 
      include 'header.html'; 
      include 'pages/banco.php';
      if (isset($_GET['busca'])) 
      {
        // Define $keyword como a palavra chave da busca do usuario. 
        $keyword = filter_var($_GET['busca']);  
      }
      else 
      {
        $keyword = "";
      }    

      $resultado = buscarEspecifico($keyword);
            
    ?>
    <div class="panel panel-default">
      
      <div class="panel-heading">Resultados</div>
      <div class="panel-body">
        <p>Resultados da pesquisa "<?php echo $keyword; ?>"</p>
      </div>
     
      <table class="table">
        <tr>
            <th>Livro</th>
            <th>Descricao</th>
            <th>Data</th>
            <th>Upload By</th>
            <th>Tamanho</th>
            <th>Download</th>
        </tr>
        <?php foreach ($resultado as $livros) : ?>
        <tr>
            <td><?php echo $livros['nome_livro']; ?> </td>
            <td><?php echo $livros['descricao_livro']; ?> </td>
            <td><?php echo $livros['data_upload']; ?> </td>
            <td><?php echo $livros['autor_upload']; ?> </td>
            <td><?php echo $livros['tamanho_livro']; ?> </td>
            <td><?php echo $livros['endereco_baixar']; ?> </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </body>
</html>