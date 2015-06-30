<html>
    <head>
       <?php include "banco.php"; $todosLivros = buscarLivros($pdo);?>
        <title>Todos os livros</title>
        <meta charset='UTF-8'>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Livro</th>
                <th>Descricao</th>
                <th>Data</th>
                <th>Upload By</th>
                <th>Tamanho</th>
            </tr>
            <?php foreach ($todosLivros as $livros) : ?>
            <tr>
                <td><?php echo $livros['nome_livro']; ?> </td>
                <td><?php echo $livros['descricao_livro']; ?> </td>
                <td><?php echo $livros['data_upload']; ?> </td>
                <td><?php echo $livros['autor_upload']; ?> </td>
                <td><?php echo $livros['tamanho_livro']; ?> </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
