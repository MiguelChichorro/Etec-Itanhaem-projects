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
      <div class="row">
        <div class="col-sm-12">
          <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" id="navbar">
            <h1 class="my-0 mr-md-auto font-weight-normal"><img src="ci.icon" alt="$" height="40" width="40">Finanguelitos<img src="ci.icon" alt="$" height="40" width="40"></h1>
            <h4 style="position:relative; right:50px;">Seja Bem vindo
              <?php
                if(isset($_SESSION['COD_USER'])) {
                  $sql= "SELECT nm_usuario FROM tb_usuario
                         WHERE  cd_usuario = " . $_SESSION['COD_USER']."";
                  if($result = $mysqli->query($sql)) {
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
      </div>
      <form class="" method="post" id="hei">
        <div class="text-center mb-4" >
          <h1 class="mb-3 font-weight-normal">Transação</h1>
          <hr>
        </div>
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <div class="form-label-group">
              <label for="inputValor">Valor</label>
              <input type="number" id="inputValor" class="form-control" name="valor" placeholder="Digite o valor" required autofocus>
            </div>
            <div class="form-label-group">
              <label for="inputData">Data</label>
              <input type="date" id="inputData" class="form-control" name="data" placeholder="Digite a data de hoje" required>
            </div>
          
            <div class="checkbox mb-2">
              <input type="radio" name="radio" class="align-items-center remember" value="Entrada" checked="checked">Entrada
              <input type="radio" name="radio" class="align-items-center remember" value="Saida">Saida
            </div>
              <label for="Selc">Categoria</label>
            <select name="selcat" id="Selc" class="form-control">

                          <?php

                    $query = "SELECT * FROM tb_categoria as cat where cat.id_usuario = " . $_SESSION['COD_USER'] ."";

                    if ($result = $mysqli->query($query)) {
                      while ($obj = $result->fetch_object()) {
                        echo "<option name=cat value=$obj->cd_categoria>" . $obj->nm_categoria . "</option>" ;
                      }
                    }
                            ?>
          </select>
            <label for="Self">Forma de pagamento</label>
             <select name="selfor" id="Self" class="form-control">
               <?php
            $query = "SELECT * FROM tb_forma as fo where fo.id_usuario = " . $_SESSION['COD_USER'] ."";

       if ($result = $mysqli->query($query)) {
         while ($obj = $result->fetch_object()) {
           echo "<option name=for value=$obj->cd_forma>" . $obj->ds_forma . "</option>" ;
         }
       }
               ?>
             </select>
             <label for="comment">Descrição</label>
   <textarea class="form-control" rows="2" id="comment" name="descr" placeholder="Digite"></textarea>
     <input class="btn btn-outline-success btn-lg" type="submit" value="Realizar Transação"></input>
          </form>
        </div>
      </div>
    </div>
          <?php
  if (isset($_POST['valor'])) {

   $sql = "insert into tb_transacao value(null, '". $_POST['valor'] . "','" . $_POST['data'] . "','" . $_POST['radio']. "','"
   . $_POST['descr']. "','" . $_POST['selfor'] . "','" .$_POST['selcat']. "','" . $_SESSION['COD_USER']."')";
   if ($query = $mysqli->query($sql)) {
           echo "";
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
