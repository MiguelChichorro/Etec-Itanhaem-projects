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
      body{

        background-color: purple;
      }
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
    <body style="background-color: #292b2c;
    font-family: 'ink free'">

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
      </div>
    </nav>
   <center>
    <div class="body">
      <?php 
      if(isset($_POST['nintendoswitch']) && $_POST['s1']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/nintendoswitch.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['nintendoswitchlite']) && $_POST['s2']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/nintendoswitchlite.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['nintendo3ds']) && $_POST['s3']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/nintendo3ds.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['nintendodsxl']) && $_POST['s4']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/nintendodsxl.jpg' style=' width: 300px; height: 300px';>";
} 
      if(isset($_POST['nintendowii']) && $_POST['s5']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/nintendowii.jpg' style='width:300px; height:300px;'>";
} 
?>
    <h1>PLAYSTATION</h1>
    <hr>
    <form method="post">
      <label><input type="checkbox" name="nintendoswitch" id="nintendoswitch" value="<img src='videogame/imagem/nintendoswitch.jpg' style='width:300px; height:300px;'>"><img src="imagem/nintendoswitch.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$1.799,00</b><br></label><br>
      <select name="s1">Quantidade
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <hr>
      <label><input type="checkbox" name="nintendoswitchlite" id="nintendoswitchlite" value="<img src='videogame/imagem/nintendoswitchlite.jpg' style='width:300px; height:300px;'>"><img src="imagem/nintendoswitchlite.jpg " style=" width: 500px; height: 500px;"><br><b>Preço: R$1.359,99</b><br></label><br>
    <select name="s2">Quantidade
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <hr>
        <label><input type="checkbox" name="nintendo3ds" id="nintendo3ds" value="<img src='videogame/imagem/nintendo3ds.jpg' style='width:300px; height:300px;'>"><img src="imagem/nintendo3ds.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$799,00</b><br></label><br>
    <select name="s3">Quantidade
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <hr>
      <label><input type="checkbox" name="nintendodsxl" id="nintendodsxl" value="<img src='videogame/imagem/nintendodsxl.jpg' style='width:300px; height:300px;'>"><img src="imagem/nintendodsxl.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$259,00</b><br></label><br>
    <select name="s4">Quantidade
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <hr>
        <label><input type="checkbox" name="nintendowii" id="nintendowii" value="<img src='videogame/imagem/nintendowii.jpg' style='width:300px; height:300px;'>"><img src="imagem/nintendowii.jpg" style=" width: 500px; height: 500px;"><br><b>Preço: R$499,00</b><br></label><br>
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
        </div>
      </form>
</center>
<?php

if(isset($_POST['nintendoswitch'])){
$_SESSION['conta']+=1799*$_POST['s1'];
  $_SESSION['nintendoswitch'] = array();
  array_push($_SESSION['nintendoswitch'], $_POST['nintendoswitch'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 1799*$_POST['s1'] . "</b>");
}
if(isset($_POST['nintendoswitchlite'])){
$_SESSION['conta']+=1359*$_POST['s2'];
  $_SESSION['nintendoswitchlite'] = array();
  array_push($_SESSION['nintendoswitchlite'], $_POST['nintendoswitchlite'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 1359*$_POST['s2'] . "</b>");
}
if(isset($_POST['nintendo3ds'])){
$_SESSION['conta']+=799*$_POST['s3'];
  $_SESSION['nintendo3ds'] = array();
  array_push($_SESSION['nintendo3ds'], $_POST['nintendo3ds'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 799*$_POST['s3'] . "</b>");
}
if(isset($_POST['nintendodsxl'])){
$_SESSION['conta']+=259*$_POST['s4'];
  $_SESSION['nintendodsxl'] = array();
  array_push($_SESSION['nintendodsxl'], $_POST['nintendodsxl'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 259*$_POST['s4'] . "</b>");
}
if(isset($_POST['nintendowii'])){
$_SESSION['conta']+=499*$_POST['s5'];
  $_SESSION['nintendowii'] = array();
  array_push($_SESSION['nintendowii'], $_POST['nintendowii'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 499*$_POST['s5'] . "</b>");
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
