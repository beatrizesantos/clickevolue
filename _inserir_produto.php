<?php

include 'conexao.php';


$nomeproduto = $_POST['nomeproduto'];
$nroproduto = $_POST['nroproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria']; 


 $sql = "INSERT INTO estoque (`nomeproduto`, `nroproduto`, `quantidade`, `categoria`) VALUES ('$nomeproduto', $nroproduto, $quantidade,'$categoria')";
 $inserir = mysqli_query($conexao, $sql); 

?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <div class="container" style="width: 500px; margin-top: 20px">
 	
 	<h4> Produto adicionado com sucesso! </h4>
 	<div style="padding-top: 30px">
 	<center>
 	<a href="index.php" role= "button" class="btn btn-sm btn-primary"> Cadastrar novo produto</a>
 	</center>

 </div>