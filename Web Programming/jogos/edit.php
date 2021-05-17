<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar</title>
  </head>
  <body>
    <div class="container">
      <marquee><h1>Editar</h1></marquee>
      <form method="post">
        <?php
          $sql = "SELECT * FROM tb_jogos WHERE cd_jogos = ".$_GET['jog']."";
          if ($result = $mysqli->query($sql)) {
          while ($obj = $result->fetch_object()) {
         ?>
         <center>
           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
                 <?php echo "<img src=$obj->ds_imagem height='300px' width='200px'>";?>
               <div class="card-body" id="crash">
                 <hr>
                 Valor: <input class="form-control form-control-sm" type="number" name="valor" value="<?php echo $obj->vl_jogos; ?>">
                 Data de lançamento:  <input class="form-control form-control-sm" type="date" name="data" value="<?php echo $obj->dt_jogos; ?>">
                 Genero: <select class="custom-select" name="geno">
                     <option hidden><?php echo $obj->ds_jogostip;?></option>
                     <option value="RPG">RPG</option>
                     <option value="FPS">FPS</option>
                     <option value="TPS">TPS</option>
                 </select>
                 Desenvolvedora: <select class="custom-select" name="desen">
                   <option hidden><?php echo $obj->ds_jogosmarc;?></option>
                   <option value="Microsoft">Microsoft</option>
                   <option value="Sony">Sony</option>
                   <option value="Outra">Outra</option>
                 </select>
                 Plataforma(s): <select class="custom-select" name="plat">
                   <option hidden><?php echo $obj->ds_jogosplat;?></option>
                   <option value="Xbox One">Xbox One</option>
                   <option value="PS4">PS4</option>
                   <option value="Todas">Todas</option>
                 </select><br><br>
                 <button type="submit" class="btn btn-primary" name="button">Editar</button>
               </div>
             </div>
           </div>
         </center>
        <?php
              }
            }
            if (isset($_POST['valor'])) {
             $sql = "update tb_jogos set vl_jogos = '" .$_POST['valor']."',dt_jogos = '" .$_POST['data']."',ds_jogostip = '" .$_POST['geno']."',ds_jogosmarc = '" .$_POST['desen']."',ds_jogosplat = '" .$_POST['plat']."' where cd_jogos = '". $_GET['jog'] ."'";
              if ($query = $mysqli->query($sql)) {
                header("location:Outro.php");
                }
                else{
             printf("Error: %s\n",$mysqli->error);
           }
          }
         ?>
      </form>
    </div>
  </body>
</html>
