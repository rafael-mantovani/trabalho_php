<?php
    require('conexao.php');

    $descricao    = $_POST['descricao'];
    $marca   = $_POST['marca'];
    $estoque = $_POST['estoque'];
    $preco   = $_POST['preco'];

    $resultado = mysqli_query($conexao, "INSERT INTO produtos (id, descricao, marca, estoque, preco) 
    VALUES (NULL, '$descricao', '$marca', '$estoque', '$preco')");

    mysqli_close($conexao);
?>
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
    <?php if ($resultado == true): ?>
        <div class="alert alert-success" role="alert">Produto cadastrado.</div>
        <a href="select.php" class="btn btn-success">Listagem do Produto</a>
    <?php endif; ?>
  </body>
</html>



