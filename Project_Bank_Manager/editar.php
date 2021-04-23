<?php
  session_start();
  include('conexao.php');
  if(!isset($_SESSION['COD_USER'])){header("location:index.php");}
?>
<html style="overflow-x: hidden;">
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
      <form class="" method="post" id="hei">
        <div class="text-center mb-4" >
         <h1 class="mb-3 font-weight-normal">Editar</h1>
         <hr>
        </div>
      <?php
      if (isset($_SESSION['COD_USER'])) {
        $query = "SELECT * FROM tb_transacao  as tra
        inner join tb_forma as form on(tra.id_forma = form.cd_forma)
        inner join tb_categoria as cat on(tra.id_categoria = cat.cd_categoria)
        where cd_transacao = ".$_GET['cod']."";
        if ($result = $mysqli->query($query)) {
          while ($obj = $result->fetch_object()) {
           ?>
       <div class="row">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
             <div class="form-label-group">
               <label for="inputValor">Valor</label>
               <input type="number" id="inputValor" class="form-control" name="valor" value="<?php echo $obj->vl_transacao;?>" required autofocus>
             </div>
             <div class="form-label-group">
               <label for="inputData">Data</label>
               <input type="date" id="inputData" class="form-control" name="data" value="<?php echo $obj->dt_transacao;?>"  required>
             </div>
                  <div class="checkbox mb-2">
                 <input type="radio" name="radio" class="align-items-center remember" value="Entrada" <?php if($obj->st_transacao=='Entrada'){echo "checked";} ?>>Entrada
                 <input type="radio" name="radio" class="align-items-center remember" value="Saida" <?php if($obj->st_transacao=='Saida'){echo "checked";} ?>>Saida
             </div>
             <label for="Selc">Categoria</label>
           <select name="selcat" id="Selc" class="form-control">

                         <?php

                   $query = "SELECT * FROM tb_categoria";

                   if ($result = $mysqli->query($query)) {
                     while ($obj2 = $result->fetch_object()) {
                       if ($obj2->cd_categoria ==$obj->id_categoria ) {
                           echo "<option name=cat value=$obj2->cd_categoria selected>" . $obj2->nm_categoria . "</option>";
                         }
                         else{
                          echo "<option name=cat value=$obj2->cd_categoria>" . $obj2->nm_categoria . "</option>" ;
                         }

                     }
                   }
                           ?>
         </select>

           <label for="Self">Forma de pagamento</label>
            <select name="selfor" id="Self" class="form-control">
              <?php
           $query = "SELECT * FROM tb_forma";

      if ($result = $mysqli->query($query)) {
        while ($obj2 = $result->fetch_object()) {
         if ($obj2->cd_forma ==$obj->id_forma ) {
           echo "<option name=for value=$obj2->cd_forma selected>" . $obj2->ds_forma . "</option>";
         }
         else{
                 echo "<option name=for value=$obj2->cd_forma>" . $obj2->ds_forma . "</option>" ;
        }

        }
      }
              ?>
            </select>
            <label for="comment">Descrição</label>
  <textarea class="form-control" rows="3" id="comment" name="descr"><?php echo $obj->ds_transacao;?></textarea>
    <input class="btn btn-outline-success btn-lg" type="submit" value="Atualizar Transação"></input>
         </form>
         <?php
             }
  }
  if (isset($_POST['valor'])) {

   $sql = "update tb_transacao
        set vl_transacao = '" .$_POST['valor']."',dt_transacao = '" .$_POST['data']."',ds_transacao = '" .$_POST['descr']."',st_transacao = '" .$_POST['radio']."',id_forma = '" .$_POST['selfor']."',id_categoria = '" .$_POST['selcat']."' where cd_transacao = '". $_GET['cod'] ."'";
         if ($query = $mysqli->query($sql)) {
            header("location:transacoes.php");
        }
  else{
    printf("Error: %s\n",$mysqli->error);
  }
         }

  }


      ?>


         </div>
       </div>
    </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
</html>
