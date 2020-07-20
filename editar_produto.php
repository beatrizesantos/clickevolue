<?php

include 'conexao.php'; 

$id_estoque = $_GET['id_estoque']; 


?>
<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8">
     <title>Click Evolue</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
     <style type="text/css"> 
         
         #tamanhoContainer{
             max-width: 500px; 
         
         }
         #botao {
             background-color: #0D0B20; 
             color: #ffffff;
             font-weight: bold;
         }
     </style>
</head>
    <body>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px">
            <h4>Formulário para Cadastro de produto</h4>
        <form action="_atualizar_produto.php"
              method= "post" style="margin-top: 50px"> 

            <?php

            echo $_GET['id_estoque'];

            $sql = "SELECT * FROM estoque WHERE id_estoque = $id_estoque";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)) {
           
              $id_estoque = $array['id_estoque'];
              $nomeproduto = $array['nomeproduto'];
              $nroproduto = $array['nroproduto'];
              $quantidade = $array['quantidade'];
              $categoria = $array['categoria']

           ?> 
            <div class="form-group">
            <label >Nome Produto </label>
            <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>" style="display: disabled">
    
  </div>
            <div class="form-group">
            <label >Nro Produto  </label>
            <input type="number" class="form-control" name= "nroproduto" value="<?php echo $nroproduto ?>">
            <input type="number" class="form-control" name= "id_estoque" value="<?php echo $id_estoque ?>"style="display: none">
    
  </div>  
    
            <div class="form-group">
            <label> Quantidade </label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>" >
     </div>
        
            <div class="form-group">
            <label ><i class="far fa-edit"></i> </label>
            <select class="form-control" name="categoria">
            <option> categoria A </option>
            <option> categoria B </option>
            <option> categoria C </option>

  </div>
    </select>
    </div>
            
            <div style="text-align: right;">
            <button type="submit" id="botao" class="btn btn-sm"> Atualizar </button>
       </div>
       <?php } ?>
       </form>
            
   </div>

        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>