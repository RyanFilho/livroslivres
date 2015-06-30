<html>
    <head>
       <?php include "banco.php"; ?>
        <title>Todos os livros</title>
        <meta charset='UTF-8'>
        <!-- Script de Busca -->
        <?php 
            $esp = $_GET['busca'];
            $resultado = buscarEspecifico($pdo,$esp);         
        ?>

    </head>
    <body>
	<div = class"container">
        <table border="1">
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