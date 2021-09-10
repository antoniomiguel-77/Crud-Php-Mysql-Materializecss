<?php
require_once './php_action/db_conect.php';
session_start();
if(isset($_SESSION['msg'])):

   echo $_SESSION['msg'];
 

endif;
session_unset();
session_destroy();
?>

 


<!--HEADER   -->
<?php require_once "includes/header.php" ?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
<table>
    <?php
        $sql = "SELECT * FROM tb_clientes";
        $resultado = mysqli_query($conexao,$sql);
        
     

    ?>
    <h3 class="light">Clientes</h3>
    <thead>
        <tr>

        <th>Nome:</th>
        <th>Sobrenome:</th>
        <th>E-mail:</th>
        <th>Idade:</th>
      

    </tr>
    </thead>
    <tbody>
        
        <?php while($dados = mysqli_fetch_array($resultado)): ?>
       <tr>
           <td><?php echo $dados['nome']  ?></td>
           <td><?php echo $dados['snome'] ?> </td>
           <td><?php echo $dados['email'] ?></td>
           <td><?php echo $dados['idade'] ?></td>
           <td><a href="atualizar.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><img src="icons/edit.png" style="margin:8px 6px;"></a></td>
           <td><a href="./php_action/delete.php?del=<?php echo $dados['id'] ?>" class="btn-floating red"><img src="icons/delete.png" style="margin:6px 6px;"></a></td>

       </tr>
       <?php endwhile; ?>
    </tbody>
</table>
<br>
<a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php require_once "includes/footer.php" ?>
<!--FOOTER -->