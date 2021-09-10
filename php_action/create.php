<?php
require_once "db_conect.php";
session_start();
/** Adicionar clientes  */
if(isset($_POST['btn-cadastrar'])):
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$snome = filter_input(INPUT_POST,'snome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);

    if(!$email = filter_var($email,FILTER_VALIDATE_EMAIL)):
        echo "<li>Email-invalido</li>";
    endif;
    //Verificar se os campos estao vasios
    if($nome !="" || $snome !="" || $email !="" || $idade !=""):
    $sql = "INSERT INTO tb_clientes(nome,snome,email,idade) VALUES('$nome','$snome','$email','$idade')";
    $dados = mysqli_query($conexao,$sql);

    if($dados):
       $_SESSION['msg']  =  "Cliente cadastrado com sucesso";
       header('location:../index.php');
    else:
        echo "Erro ao cadastrar Cliente";
    endif;
else:
    echo "<li>Todos campos sao obrigatorios</li>";
endif;
endif;