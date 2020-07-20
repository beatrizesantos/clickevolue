<?php

include 'conexao.php';

$id_estoque = $_GET['id_estoque'];

$sql = "DELETE FROM estoque WHERE id_estoque = $id_estoque";
$deletar = mysqli_query($conexao,$sql);
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <div class="container" style="width:400px">;
  <center>
  	<h3>Deletado com sucesso</h3>
  	<div style="margin-top: 20px">
  	<a href="listadeprod.php" class="btn btn-sm btn-warning" style="color: #fff">voltar</a>
    </div>
  </center>

  </div>