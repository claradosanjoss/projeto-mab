<?php
// segurança

include("../servidor.php");

// pegar os registro do formulario
 $cod_us = $_POST["cod_us"];

 $nome_us = $_POST["nome_us"] ;

 $login_us =  $_POST["login_us"];

 $senha_us = $_POST["senha_us"];


// trocar a imagem
//$alteralImagen = ?

// query

$sqlUpdate =  " update tb_livro 
                   set  desc_liv = '".$nome_us."',
                         valor_liv = ".$login_us .",
                          cod_ed =  ".$senha_us ." 
                 where cod_us = ". $cod_us ;   

           //executar
         $res = mysqli_query($cx ,$sqlUpdate); 
         
         if ( mysqli_affected_rows($cx) == 1){
               echo "Alterado com Sucesso";
         }
mysqli_close($cx);

?>