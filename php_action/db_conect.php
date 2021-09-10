<?php
/**Conexao com banco de dados */
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_pdo";

$conexao = mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_error()):

    echo "Erro na conexao:".mysqli_connect_error();

endif;