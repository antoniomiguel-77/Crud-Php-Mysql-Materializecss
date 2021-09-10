 <?php
require_once './php_action/db_conect.php';
if(isset($_GET['id'])):
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM tb_clientes WHERE id = $id";
    $resultado = mysqli_query($conexao,$sql);
    
    while($dados = mysqli_fetch_array($resultado)){
        $nome = $dados['nome'];
        $snome = $dados['snome'];
        $email = $dados['email'];
        $idade = $dados['idade'];
        $id = $dados['id'];



    }
    

    
    
endif;
 ?>
<!--HEADER   -->
<?php require_once "includes/header.php" ?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
     <h3 class="light">Actualizar cliente</h3>
     <form action="./php_action/update.php " method="post">
         <div class="input-field col s12">
             <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">
             <label for="nome">nome</label>
         </div>

         <div class="input-field col s12">
             <input type="text" name="snome" id="snome" value="<?php echo $snome ?>">
             <label for="snome">Sobrenome</label>
         </div>
         <div class="input-field col s12">
             <input type="email" name="email" id="email" value="<?php echo $email ?>">
             <label for="email">E-mail</label>
         </div>
         <div class="input-field col s12">
             <input type="number" name="idade" id="idade" value="<?php echo $idade ?>">
             <label for="idade">Idade</label>
         </div>
         <input type="hidden" name="id" value="<?php echo $id ?> ">
         <button type="submit" class="btn" name="btn-update">Actualizar</button>
         <a href="index.php" class="btn green">Lista de Clientes</a>

     </form>
     </div>
</div>

<?php require_once "includes/footer.php" ?>
 