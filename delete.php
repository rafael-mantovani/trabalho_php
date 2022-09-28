 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Excluir Produtos</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></>    
   <style>
     body{
          background-image: url(https://www.fiscalti.com.br/wp-content/uploads/2020/09/controle-de-estoque-para-mini-mercado.png);
          background-size:cover;
     }
     .btn{
          font-size: 35px;
          color:light;
          width: 300px;
          height: 80px;
          margin-top: 350px;
          margin-left:550px ;    
     }
   </style>
 </head>
 <body>
 <?php
    require('conexao.php');
    $id=$_GET['id'];
    
    mysqli_query($conexao,"DELETE from produtos where id=$id");
    mysqli_close($conexao);
 ?>

 <a href="select.php" class="btn btn-dark">Produtos</a>    
 
 </body>
 </html>