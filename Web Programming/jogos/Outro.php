<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="CSS.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<title>Jogos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <marquee><h1>JOGOS</h1></marquee>
      <br><br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <form method="post" enctype="multipart/form-data">
            Capa do jogo <br> <input type="file" name="imagem" value=""><br>
            Valor: <input class="form-control form-control-sm" type="number" name="valor">
            Data de lançamento:  <input class="form-control form-control-sm" type="date" name="data">
            Genero: <select class="custom-select" name="geno">
              <option hidden>Escolha uma das opções</option>
                <option value="RPG">RPG</option>
                <option value="FPS">FPS</option>
                <option value="TPS">TPS</option>
            </select>
            Desenvolvedora: <select class="custom-select" name="desen">
              <option hidden>Escolha uma das opções</option>
              <option value="Microsoft">Microsoft</option>
              <option value="Sony">Sony</option>
              <option value="Outra">Outra</option>
            </select>
            Plataforma(s): <select class="custom-select" name="plat">
              <option hidden>Escolha uma das opções</option>
              <option value="Xbox One">Xbox One</option>
              <option value="PS4">PS4</option>
              <option value="Todas">Todas</option>
            </select><br><br>
            <input type="submit" class="btn btn-primary" name="" value="Enviar">

          </form>
          <?php
          if (isset($_POST['valor'])) {
            $valor = $_POST['valor'];
            $data = $_POST['data'];
            $genero = $_POST['geno'];
            $desenvolvedora = $_POST['desen'];
            $plataforma = $_POST['plat'];
            $caminho = "imgs/".$_FILES['imagem']['name'].".jgp";
            move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
            $sql ="insert into tb_jogos values (NULL, '".$valor."', '".$data."', '".$genero."', '"
            .$desenvolvedora."', '".$plataforma."', '".$caminho."')";
            if ($mysqli->query($sql)) {
              echo  $mysqli->error;
            }
          }
           ?>
        </div>
        <div class="col-md-4">

        </div>
      </div>
      <hr>
      <div class="row">
        <?php
          $sql= "SELECT * FROM tb_jogos";
          if ($result = $mysqli->query($sql)) {
            while ($obj = $result->fetch_object()) {
         ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <center>
              <?php echo "<img src=$obj->ds_imagem height='300px' width='200px'>";?>
            </center>
            <div class="card-body" id="crash">
              <hr>
              <p class="card-text">
                <?php
                  echo "Valor: R$" .$obj->vl_jogos.",00<br>";
                  echo "Data de lançamento: ".$obj->dt_jogos."<br>";
                  echo "Genero: ".$obj->ds_jogostip."<br>";
                  echo "Empresa: ".$obj->ds_jogosmarc."<br>";
                  echo "Plataforma: ".$obj->ds_jogosplat;
                  ?>
             </p>
             <?php echo "<button id='pencil' class='btn btn-success'><a href=edit.php?jog=$obj->cd_jogos><img src='btt/pencil.png' width='20' height='20'></a></button>
             <button id='delet' class='btn btn-danger'><a href=exclu.php?jog=$obj->cd_jogos><img src='btt/delet.png' width='20' height='20'></a></button>"; ?>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>
    </div>
  </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
