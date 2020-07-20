 <!DOCTYPE html>
<html>
<head>
	<title> Lista de Produtos </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/04beaceb73.js" crossorigin="anonymous"></script>

</head>
<body>

 <div class="container" style="margin-top: 40px">
 <h3>Lista de Produtos</h3>
 <br>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome do Produto </th>
      <th scope="col">Nro Produto</th>
      <th scope="col"> Quantidade</th>
      <th scope="col">Categoria </th>
      <th scope="col"> Opção </th>
    </tr>
  </thead>
  
    
       <?php
           include 'conexao.php';
           $sql = "SELECT * FROM estoque";
           $busca = mysqli_query($conexao,$sql);

           while ($array = mysqli_fetch_array($busca)) {

              $id_estoque = $array['id_estoque'];
              $nomeproduto = $array['nomeproduto'];
              $nroproduto = $array['nroproduto'];
              $quantidade = $array['quantidade'];
              $categoria = $array['categoria'];
              ?>    

      <tr>

      <td><?php echo $nomeproduto ?></td>
      
      <td><?php echo $nroproduto  ?></td>
      
      <td><?php echo $quantidade ?></td>
      
      <td><?php echo $categoria ?></td>
      <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id_estoque=<?php  echo $id_estoque ?>"role="button"><i class="far fa-edit"></i>Editar</a>
        <a class="btn btn-danger btn-sm" href="editar_produto.php?id_estoque=<?php  echo $id_estoque ?>"role="button"><i class="far fa-trash-alt"></i></i>Excluir</a>




      </td>
    


   </tr>


    
    <?php } ?>
      
    
 
</table>
 
 </div>
 
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6
         Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>