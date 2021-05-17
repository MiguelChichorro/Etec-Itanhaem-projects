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
            <a class="nav-link" href="headset.php">| HEADSETS<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="control.php">| CONTROLES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mouse.php">| MOUSES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="teclado.php">| TECLADOS</a>
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
      if(isset($_POST['mousera']) && $_POST['s1']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/mousera.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['mousehyper']) && $_POST['s2']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/mousehyper.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['mouselogi']) && $_POST['s3']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/mouselogi.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['mousemulti']) && $_POST['s4']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/mousemulti.jpg' style='width:300px; height:300px;'>";
} 
      if(isset($_POST['mousefor']) && $_POST['s5']==0){
  echo "Você não selecinou a quantidade do produto <img src='imagem/mousefor.jpg' style='width:300px; height:300px;'>";
} 
?>

      <h1>MOUSES</h1>
      <hr>
      <form method="post">
        <label><input type="checkbox" name="mousera" id="mousera" value="<img src='acessorios/imagem/mousera.jpg' style='width:300px; height:300px;'>"><img src="imagem/mousera.jpg" style=" width: 398px; height: 425px;"><br><b>Preço: R$239,90</b><br></label><br>
        <select name="s1">Quantidade
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <hr>
        <label><input type="checkbox" name="mousehyper" id="mousehyper" value="<img src='acessorios/imagem/mousehyper.jpg' style='width:300px; height:300px;'>"><img src="imagem/mousehyper.jpg " style=" width: 398px; height: 425px;"><br><b>Preço: R$181,50</b><br></label><br>
      <select name="s2">Quantidade
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <hr>
        <label><input type="checkbox" name="mouselogi" id="mouselogi" value="<img src='acessorios/imagem/mouselogi.jpg' style='width:300px; height:300px;'>"><img src="imagem/mouselogi.jpg" style=""><br><b>Preço: R$199,90</b><br></label><br>
      <select name="s3">Quantidade
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <hr>
        <label><input type="checkbox" name="mousemulti" id="mousemulti" value="<img src='acessorios/imagem/mousemulti.jpg' style='width:300px; height:300px;'>"><img src="imagem/mousemulti.jpg" style=" width: 398px; height: 425px;"><br><b>Preço: R$178,99</b><br></label><br>
      <select name="s4">Quantidade
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <hr>
        <label><input type="checkbox" name="mousefor" id="mousefor" value="<img src='acessorios/imagem/mousefor.jpg' style='width:300px; height:300px;'>"><img src="imagem/mousefor.jpg" style=" width: 398px; height: 425px;"><br><b>Preço: R$45,90</b><br></label><br>
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

if(isset($_POST['mousera'])){
  $_SESSION['conta']+=239.90*$_POST['s1'];
              $_SESSION['mousera'] = array();
  array_push($_SESSION['mousera'], $_POST['mousera'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 239.90*$_POST['s1'] . "</b>");
}
if(isset($_POST['mousehyper'])){
  $_SESSION['conta']+=181.50*$_POST['s2'];
              $_SESSION['mousehyper'] = array();
  array_push($_SESSION['mousehyper'], $_POST['mousehyper'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 181.50*$_POST['s2'] . "</b>");
}
if(isset($_POST['mouselogi'])){
  $_SESSION['conta']+=199.90*$_POST['s3'];
              $_SESSION['mouselogi'] = array();
  array_push($_SESSION['mouselogi'], $_POST['mouselogi'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 199.90*$_POST['s3'] . "</b>");
}
if(isset($_POST['mousemulti'])){
  $_SESSION['conta']+=178.99*$_POST['s4'];
              $_SESSION['mousemulti'] = array();
  array_push($_SESSION['mousemulti'], $_POST['mousemulti'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 178.99*$_POST['s4'] . "</b>");
}
  if(isset($_POST['mousefor'])){
  $_SESSION['conta']+=45.90*$_POST['s5'];
              $_SESSION['mousefor'] = array();
  array_push($_SESSION['mousefor'], $_POST['mousefor'],$_SESSION['preço']="<b style=' color: red;'>" ."R$" . 45.90*$_POST['s5'] . "</b>");
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
