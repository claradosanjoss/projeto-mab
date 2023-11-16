<?php
// conexão com o servidor
include("../servidor.php");


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">
        <section class="col-md-2">
            
        </section>
        <section class="col-md-8">
            <h3 class="mt-5">Lista de Livros</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Editar / DELETAR</th>
                    </tr>
                </thead>
                <tbody>

                 <?php
                   // query
                   $sql = " select  cod_us, nome_us, login_us 
                     from  tb_usuario";

                   // executar
                    $res =  mysqli_query($cx , $sql);
                    
                    // converter
                      while( $colunas =  mysqli_fetch_array($res)){
                     echo "<tr>";
                         echo "<th scope='row'>".$colunas["cod_us"]."</th>"; 
                         echo "<td>".$colunas["nome_us"]."</td>";
                         echo "<td>".$colunas["login_us"]  ."</td>";
                      
                         echo "<td> <a href='altus.php?cod_us=".$colunas["cod_us"]."'>
                               Alterar </a>    |   ";

                         echo "<a href='delus.php?cod_us=".$colunas["cod_us"]."'>
                               Deletar </a> </td> ";    
                     echo "</tr>";

                      }

                 ?>
                    
                </tbody>
            </table>


           
        </section>
        <section class="col-md-2"></section>

    </div>

</body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>