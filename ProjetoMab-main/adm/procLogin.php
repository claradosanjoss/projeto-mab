<?php
session_start();
//incluir script do servidor
include('../servidor.php');

//pegar dados de acesso e verificar no banco para saber se o usuario existe
$login = $_POST['login'];
$senha = md5($_POST['senha']);

//fazer consulta ao banco

$sql=" SELECT * FROM tb_usuario WHERE login_us = '$login' and ";
$sql .="  senha_us = '$senha' " ;

//echo $sql ;

//mandar o php executar no mysql

   $resp = mysqli_query($cx, $sql);

   if (mysqli_num_rows($resp) == 1){
       //pegar o resultado do registro do usuario
       $campo = mysqli_fetch_assoc($resp);
       //pegar informacoes separadas do usuario
       //echo $campo['nome_us'];
       //echo $campo['cod_us'];
       //echo $campo['senha_us'];
       //pegar o id do usuario pra ficar na memória do navegador
       $_SESSION['usuario']['id'] = $campo['cod_us'];
       //direcionar para o menu
       header('location:menu.php');
       echo "encontrado";
   }else{
       //caso o usuario nao exista retorna para tela de login
       header('location:index.php');
   }
?>