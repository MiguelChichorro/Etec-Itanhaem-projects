<?php
    session_start();
    include('conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS.css">
  <link rel="shortcut icon" type="image/x-icon" href="ci.icon">
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Finanguelitos</title>
  </head>
  <body>
 <div class="container-fluid">
   <div class="flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" id="navbar">
<center>
      <h1 class="my-0 mr-md-auto font-weight-normal"> <img src="ci.icon" alt="$" height="50" width="50">Finanguelitos<img src="ci.icon" alt="$" height="50" width="50"></h1>
       <p>Olá! seja bem vindo por favor faça o login caso não tenha um faça o cadastro</p>
</center>
   </div>
   <div class="row col-md-12">


   <form class="form-signin col-sm-5" method="post">
     <div class="text-center mb-4" >
        <img class="mb-4" src="ci.png" alt="" width="150" height="150">
       <h1 class="mb-3 font-weight-normal">Cadastro</h1>
     </div>


     <div class="form-label-group">
       <label for="inputname">Nome</label>
       <input type="text" id="inputname" class="form-control" name="name" placeholder="Digite seu nome" required autofocus>
     </div>

     <div class="form-label-group">
       <label for="inputEmail">Email</label>
       <input type="email" id="inputEmail" class="form-control" name="email"placeholder="Digite seu endereço de Email" required autofocus>
     </div>


     <div class="form-label-group">
       <label for="inputPassword">Senha</label>
       <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Digite sua Senha" required>
     </div>
<br>
       <div class="row aling-center remember">
         <input class="btn btn-outline-success btn-lg " type="submit" value="Cadastrar"></input>

       </div>
       <br>

     </div>
   </form>
   </div>
 </div>

 <?php
 if (isset($_POST['name'])) {

 $sql = "insert into tb_usuario value(null,'". $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['password']. "')";


   if ($query = $mysqli->query($sql)) {
           header("location:index.php");
         }
         else{
           printf("Error: %s\n",$mysqli->error);
         }
 }


  ?>

   </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>
