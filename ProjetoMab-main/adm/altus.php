<?php
  // session
  include("../servidor.php");

   // pegar o cod_livro;
   $cod_us =  $_GET["cod_us"];
   //echo "<br>";
   //echo $_GET["x"];
   
  // query para saber quem e o livro

    $sql = " select * from  tb_usuario  where cod_us = " . $cod_us;

  
  
    // mandar executar 
   $resp  = mysqli_query($cx, $sql);
  // transforma os dados do sql(tabela) em array(php) indice, associativo
   $campo =  mysqli_fetch_array($resp);
   
   //echo $campo["titulo_liv"];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <section class="col-md-2">

            </section>

           

            <section class="col-md-8">
                <h3 class="mt-5">Alterar Usuário</h2>

                    <form action="procaltus.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="cod_us" 
                      value="<?php echo $campo["cod_us"] ?>">    
                    
                    
                    <div class="form-group">
                            <label for="t">Nome : </label>
                            <input type="text" class="form-control" id="t" 
                            name="titulo" 
                            value="<?php echo $campo["nome_us"]?>">
                        </div>
                        <div class="form-group">
                            <label for="t">Email : </label>
                            <input type="text" class="form-control" id="t" 
                            name="titulo" 
                            value="<?php echo $campo["login_us"]?>">
                        </div>
                        <div class="form-group">
                            <label for="t">Senha : </label>
                                <input type="text" class="form-control" id="valor" name="valor"
                                value="<?php echo $campo["senha_us"] ?>"
                                >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </form>
            </section>

            <section class="col-md-2"></section>
        </div>
    </div>

</body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<?php 
  mysqli_close($cx)
  ?>
</html>