<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
  </head>
  <body>
    <table class="table table-dark table-striped">
        <tr>
            <td>Código</td>
            <td>Descrição</td>
            <td>Marca</td>
            <td>Estoque</td>
            <td>Preço</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <?php 
            require('conexao.php');
            $retorno = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY id ASC");
        ?>

        <?php while($produtos = mysqli_fetch_assoc($retorno)): ?>
            <tr>
                <td><?=$produtos['id']?></td>
                <td><?=$produtos['descricao']?></td>
                <td><?=$produtos['marca']?></td>
                <td><?=$produtos['estoque']?></td>
                <td><?=$produtos['preco']?></td>
                <td><a href="editar.php?id=<?=$produtos['id']?>" class="btn btn-info">Editar</a></td>
                <td><a href="delete.php?id=<?=$produtos['id']?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <a href="cadastrar.php" class="btn btn-primary">Novo Produto</a>
  </body>
</html>