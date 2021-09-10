<?php
require_once "update.php";
require_once "db_conect.php";
session_start();
if(isset($_POST['btn-update'])):

    

    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $snome = filter_input(INPUT_POST,'snome',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);


    $sql ="UPDATE tb_clientes SET nome ='$nome',snome='$snome',email='$email',idade='$idade' WHERE id = '$id'";
    $resultado = mysqli_query($conexao,$sql);

    if($resultado):
        $_SESSION['msg'] =  "<li>dados editado com sucesso</li>";
        header("Location:../index.php");
    else:
        $_SESSION['msg'] =  "<li> Erro ao editar dados</li>";
       // header("Location:../index.php");
    endif;



endif;