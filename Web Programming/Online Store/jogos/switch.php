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
            <a class="nav-link" href="xboxo.php">| XBOX ONE<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ps4.php">| PS4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="switch.php">| SWITCH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pc.php">| PC</a>
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
          if(isset($_POST['smash']) && $_POST['s1']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/smash.jpg' style='width:300px; height:300px;'>";
          }
          if(isset($_POST['mario']) && $_POST['s2']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/mario.jpg' style='width:300px; height:300px;'>";
          }
          if(isset($_POST['kart']) && $_POST['s3']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/kart.jpg' style='width:300px; height:300px;'>";
          }
          if(isset($_POST['hollow']) && $_POST['s4']==0){
          echo "Você não selecinou a quantidade do produto <img src='imagem/hollow.jpg' style=' width: 300px; height: 300px';>";
          }
          if(isset($_POST['pokemon']) && $_POST['s5']==0){
            echo "Você não selecinou a quantidade do produto <img src='imagem/pokemon.jpg' style='width:300px; height:300px;'>";
          }
        ?>
        <h1>SWITCH</h1>
        <hr>
        <form method="post">
          <label><input type="checkbox" name="smash" id="smash" value="<img src='jogos/imagem/smash.jpg' style='width:300px; height:300px;'>"><img src="imagem/smash.jpg"><br><b>Preço: R$283,00</b><br></label><br>
          <select name="s1">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="mario" id="mario" value="<img src='jogos/imagem/mario.jpg' style='width:300px; height:300px;'>"><img src="imagem/mario.jpg"><br><b>Preço: R$280,00</b><br></label><br>
          <select name="s2">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="kart" id="kart" value="<img src='jogos/imagem/kart.jpg' style='width:300px; height:300px;'>"><img src="imagem/kart.jpg"><br><b>Preço: R$169,90</b><br></label><br>
          <select name="s3">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="hollow" id="hollow" value="<img src='jogos/imagem/hollow.jpg' style='width:300px; height:300px;'>"><img src="imagem/hollow.jpg"><br><b>Preço: R$266,00</b><br></label><br>
          <select name="s4">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <label><input type="checkbox" name="pokemon" id="pokemon" value="<img src='jogos/imagem/pokemon.jpg' style='width:300px; height:300px;'>"><img src="imagem/pokemon.jpg"><br><b>Preço: R$265,00</b><br></label><br>
          <select name="s5">Quantidade
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <hr>
          <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name="butao" value="Adicionar ao Carrinho"><br><br>
        </form> 
      </div>
    </center>
    <?php
      if(isset($_POST['smash'])){
        $_SESSION['conta']+=283*$_POST['s1'];
        $_SESSION['smash'] = array();
        array_push($_SESSION['smash'], $_POST['smash'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 283*$_POST['s1'] . "</b>");
      }
      if(isset($_POST['mario'])){
        $_SESSION['conta']+=283*$_POST['s2'];
        $_SESSION['mario'] = array();
        array_push($_SESSION['mario'], $_POST['mario'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 283*$_POST['s1'] . "</b>");
      }
      if(isset($_POST['kart'])){
        $_SESSION['conta']+=169.90*$_POST['s3'];
        $_SESSION['kart'] = array();
        array_push($_SESSION['kart'], $_POST['kart'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 169.90*$_POST['s1'] . "</b>");
      }
      if(isset($_POST['hollow'])){
        $_SESSION['conta']+=266*$_POST['s4'];
        $_SESSION['hollow'] = array();
        array_push($_SESSION['hollow'], $_POST['hollow'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 266*$_POST['s1'] . "</b>");
      }
        if(isset($_POST['pokemon'])){
        $_SESSION['conta']+=265*$_POST['s5'];
        $_SESSION['pokemon'] = array();
        array_push($_SESSION['pokemon'], $_POST['pokemon'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 265*$_POST['s1'] . "</b>");
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
