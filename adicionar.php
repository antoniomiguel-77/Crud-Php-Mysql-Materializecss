 
<!--HEADER   -->
<?php require_once "includes/header.php" ?>
<!--Adicionar clientes -->
<?php  ?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
     <h3 class="light">Novo cliente</h3>
     <form action="./php_action/create.php" method="post">
         <div class="input-field col s12">
             <input type="text" name="nome" id="nome">
             <label for="nome">nome</label>
         </div>

         <div class="input-field col s12">
             <input type="text" name="snome" id="snome">
             <label for="snome">Sobrenome</label>
         </div>
         <div class="input-field col s12">
             <input type="email" name="email" id="email">
             <label for="email">E-mail</label>
         </div>
         <div class="input-field col s12">
             <input type="number" name="idade" id="idade">
             <label for="idade">Idade</label>
         </div>
         <button type="submit" class="btn" name="btn-cadastrar">Cadastrar</button>
         <a href="index.php" class="btn green">Lista de Clientes</a>
     </form>
     </div>
</div>

<?php require_once "includes/footer.php" ?>
 