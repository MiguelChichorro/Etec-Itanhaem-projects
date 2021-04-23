<?php
    session_start();
    include('conexao.php');
    if(!isset($_SESSION['COD_USER'])){header("location:index.php");}
?>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="gerenciador.css">
  <link rel="shortcut icon" type="image/x-icon" href="ci.icon">
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Finanguelitos</title>
  </head>
  <body>
 <div class="container-fluid">
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" id="navbar">
        <h1 class="my-0 mr-md-auto font-weight-normal"><img src="ci.icon" alt="$" height="40" width="40">Finanguelitos<img src="ci.icon" alt="$" height="40" width="40"></h1>
        <h4 style="position:relative; right:50px;">Seja Bem vindo
          <?php
          if (isset($_SESSION['COD_USER'])) {
            $sql= "SELECT nm_usuario FROM tb_usuario
            WHERE  cd_usuario = " . $_SESSION['COD_USER']."";
            if ($result = $mysqli->query($sql)) {
              while ($obj = $result->fetch_object()) {
                echo $obj->nm_usuario ;
              }
            }
          }
          ?>
        </h4>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark actived" href="gerenciador.php">Transação</a>
          <a class="p-2 text-dark" href="transacoes.php">Histórico</a>
          <a class="p-2 text-dark" href="painel.php">Painel</a>
          <div class="btn-group">
            <button class="btn-sm dropdown-toggle" type="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Adicione
            </button>
            <div class="dropdown-menu">
              <a class="p-2 text-dark" href="addforma.php">Add Forma</a><br>
              <a class="p-2 text-dark" href="addcat.php">Add Categoria</a>
            </div>
        </nav>
          <a href="destroy.php"><img src="logout.png" alt="logout" height="30" width="30"></a>
      </div>
      </div>
      <div class="container">
         <div class="row col-md-12">
      <div class="col" id="his">
        <h2>Histórico de Transações</h2>
          <form method="post">
            <select name="data">
              <option></option>
            <option value="7">7</option>
            <option value="15">15</option>
            <option value="30">30</option>
            </select>
            <button class="btn btn-outline-success btn-sm" id="data" type="submit" value="Atualizar" style="width: 10%; margin-left: 0%; margin-top:0%;margin-bottom:0%;">Enviar</button>
          </form>
        <div id="table">
         <table class="table">

          <thead>
            <tr>
              <th scope="col">Valor</th>
              <th scope="col">data</th>
              <th scope="col">E/S</th>
              <th scope="col">Categoria</th>
              <th scope="col">Forma</th>
              <th scope="col">Descrição</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>

        <?php

        if (isset($_POST['data'])) {

        $query = '
      SELECT * FROM tb_transacao AS tra
      INNER JOIN tb_forma AS form ON ( tra.id_forma = form.cd_forma )
      INNER JOIN tb_categoria AS cat ON ( tra.id_categoria = cat.cd_categoria )
      WHERE tra.id_usuario = '.$_SESSION['COD_USER'].' AND dt_transacao
        BETWEEN DATE_SUB( NOW( ) , INTERVAL '.$_POST['data'].'
        DAY )
        AND NOW( )';
       
        $result = $mysqli->query($query);
        
        if ($result) {
          while ($obj = $result->fetch_object()) {
              
              //$mostradata = date_default_timezone_set("d/m/Y", strtotime($obj->dt_transacao));
            echo "
              <tr>
                <td>".$obj->vl_transacao."R$</td>
                <td>".$obj->dt_transacao."</td>
                <td>".$obj->st_transacao."</td>
                <td>".$obj->nm_categoria."</td>
                <td>".$obj->ds_forma."</td>
                <td>".$obj->ds_transacao."</td>
                <td><button id='pencil'><a href=editar.php?cod=$obj->cd_transacao><img src='pencil.png' width='20' height='20'></a></button> <button id='delet'><a href=exclu.php?cod=$obj->cd_transacao><img src='delet.png' width='20' height='20'></a></button></td>
              </tr>";
          }
        }
       if ($query = $mysqli->query($sql)) {
         }
         else{
           printf("Error: %s\n",$mysqli->error);
         }

   }
        ?>
                 </tbody>
                 </table>
                </div>
               </div>
             </div>
          </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
