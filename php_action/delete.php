<?php
require_once "db_conect.php";
session_start();
if(isset($_GET['del'])):

    $id = $_GET['del'];
    $sql = "DELETE FROM tb_clientes WHERE id = $id ";
    $resultado = mysqli_query($conexao,$sql);
    
    if($resultado > 0):
        $_SESSION['msg'] = "Cliente deletado com sucesso";
        header("Location:../index.php");
    else:
        $_SESSION['msg'] = "Erro ao deletar cliente";
    endif;
    


endif;