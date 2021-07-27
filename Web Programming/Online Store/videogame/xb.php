<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
      *{
        outline: none;
      }
      div.head{
        width: 100%;
        height: 10%;
      }
      #oi{
        width: 200px;
        height: 200px;
      }
      #car{
        width: 30px;
        height: 30px;
      }
      #logo{
        height: 50px;
        width: 300px;
      }
      #ponto{
        height: 20px;
        width: 20px;
        float: right;
      }
      body{background-color: purple;}
      button{
        background: none;
        border: none;
        cursor: pointer;
      }
      hr{
        width: 100%;
        border-color: black;
      }
      .body{
        height: auto;
        width: 90%;
        background-color: white;
        border: solid 5px black;
        border-radius: 20px;
      }
      div.body hr{ border: dashed; width: 99%;}
      select{
        height: 50px;
        font-size: 20px;
        cursor: pointer;
        width: 50px;
      }
      option{
        font-size: 20px;
        cursor: pointer;
      }
      b{
        color: red;
      }
      label{
        cursor: pointer;
      }
    </style>
    <meta charset="utf-8">
    <title>Bootstrap</title>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
  </head>
  <body style="background-color: #292b2c;font-family: 'ink free'">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php"><img src="../st.png" alt="logo" id="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="xb.php">| XBOX<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pl.php">| PLAYSTATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pcs.php">| PCS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sta.php">| NINTENDO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../carrinho.php"><img src="../car.png" alt="carrinho" id="car"></a>
          </li>
        </ul>
      </div>
    </nav>
    <center>
      <div class="body">
        <?php 
          if(isset($_POST['xboxonex']) && $_POST['s1']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/xboxonex.jpg' style='width:300px; height:300px;'>";
          } 
          if(isset($_POST['xboxoneslim']) && $_POST['s2']==0){
          echo "Você não selecinou a quantidade do produto <img src='imagem/xboxoneslim.jpg' style='width:300px; height:300px;'>";
          } 
          if(isset($_POST['xboxonefat']) && $_POST['s3']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/xboxonef.jpg' style='width:300px; height:300px;'>";
          } 
          if(isset($_POST['xbox360slim']) && $_POST['s4']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/xbox360slim.jpeg' style=' width: 300px; height: 300px';>";
          } 
          if(isset($_POST['xbox360']) && $_POST['s5']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/xbox360.jpg' style='width:300px; height:300px;'>";
          } 
        ?>
        <h1>XBOX</h1>
        <hr>
        <form method="post">
          <label><input type="checkbox" name="xboxonex" id="xboxonex" value="<img src='videogame/imagem/xboxonex.jpg' style='width:300px; height:300px;'>"><img src="imagem/xboxonex.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$2.399,00</b><br></label><br>
          <select name="s1">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="xboxoneslim" id="xboxoneslim" value="<img src='videogame/imagem/xboxoneslim.jpg' style='width:300px; height:300px;'>"><img src="imagem/xboxoneslim.jpg " style=" width: 500px; height: 500px;"><br><b>Preço: R$1.399,00</b><br></label><br>
          <select name="s2">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="xboxonefat" id="xboxonefat" value="<img src='videogame/imagem/xboxonef.jpg' style='width:300px; height:300px;'>"><img src="imagem/xboxonef.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$999,00</b><br></label><br>
          <select name="s3">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="xbox360slim" id="xbox360slim" value="<img src='videogame/imagem/xbox360slim.jpeg' style='width:300px; height:300px;'>"><img src="imagem/xbox360slim.jpeg" style=" width: 500px; height: 500px;"><br><b>Preço: R$719,00</b><br></label><br>
          <select name="s4">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="xbox360" id="xbox360" value="<img src='videogame/imagem/xbox360.jpg' style='width:300px; height:300px;'>"><img src="imagem/xbox360.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$599,00</b><br></label><br>
          <select name="s5">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <input  class="btn btn-outline-info my-2 my-sm-0" type="submit" name="butao" value="Adicionar ao Carrinho"><br><br>
        </form>
      </div>
    </center>
    <?php
      if(isset($_POST['xboxonex'])){
        $_SESSION['conta']+=2399*$_POST['s1'];
        $_SESSION['xboxonex'] = array();
        array_push($_SESSION['xboxonex'], $_POST['xboxonex'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 2399*$_POST['s1'] . "</b>");
      }
      if(isset($_POST['xboxoneslim'])){
        $_SESSION['conta']+=1399*$_POST['s2'];
        $_SESSION['xboxoneslim'] = array();
        array_push($_SESSION['xboxoneslim'], $_POST['xboxoneslim'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 1399*$_POST['s2'] . "</b>");
      }
      if(isset($_POST['xboxonefat'])){
        $_SESSION['conta']+=999*$_POST['s3'];
        $_SESSION['xboxonefat'] = array();
        array_push($_SESSION['xboxonefat'], $_POST['xboxonefat'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 999*$_POST['s3'] . "</b>");
      }
      if(isset($_POST['xbox360slim'])){
        $_SESSION['conta']+=719*$_POST['s4'];
        $_SESSION['xbox360slim'] = array();
        array_push($_SESSION['xbox360slim'], $_POST['xbox360slim'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 719*$_POST['s4'] . "</b>");
      }
      if(isset($_POST['xbox360'])){
        $_SESSION['conta']+=599*$_POST['s5'];
        $_SESSION['xbox360'] = array();
        array_push($_SESSION['xbox360'], $_POST['xbox360'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 599*$_POST['s5'] . "</b>");
      }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-
    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.j
    s" integrity="sha384-
    UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-
    JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  </body>
</html>
