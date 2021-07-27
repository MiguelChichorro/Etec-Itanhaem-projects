<?php session_start();
if (!(isset($_SESSION['conta']))){
$_SESSION['conta']=0;
}?>
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
      #jogos{
        height: 200px;
        width: 700px;
        background-image: url(jogos.jpg);
        background-size: cover;
        transition: 0.5s;
        border: ridge 10px blue;
      }
      #ace{
        height: 200px;
        width: 700px;
        background-image: url(ace.jpg);
        background-size: cover;
        transition: 0.5s;
        border: ridge 10px blue;
      }
      #ca{
        height: 200px;
        width: 700px;
        background-image: url(camisa.jpg);
        background-size: cover;
        transition: 0.5s;
        border: ridge 10px blue;
      }
      #vid{
        height: 200px;
        width: 700px;
        background-image: url(vide.jpg);
        background-size: cover;
        transition: 0.5s;
        border: ridge 10px blue;
      }
      #vid:hover,#jogos:hover,#ca:hover,#ace:hover{
        height: 400px;
        width: 900px;
      }
    </style>
    <meta charset="utf-8">
    <title>Bootstrap</title>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
  </head>
  <body style="background-color: #292b2c;font-family: 'ink free'">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img src="st.png" alt="logo" id="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="jogos/jogos.php">| JOGOS<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acessorios/ace.php">| ACESSÓRIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="camisas/camisa.php">| CAMISAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="videogame/vide.php">| VIDEO GAMES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrinho.php"><img src="car.png" alt="carrinho" id="car"></a>
          </li>
        </ul>
      </div>
    </nav>
    <center>
      <div class="body">
        <h1>JOGOS</h1>
        <hr>
        <button type="button" name="button"><a href="jogos/jogos.php"><fieldset id="jogos"></fieldset></a></button>
        <hr>
        <h1>ACESSORIOS</h1>
        <hr>
        <button type="button" name="button"><a href="acessorios/ace.php"><fieldset id="ace"></fieldset></a></button>
        <hr>
        <h1>CAMISETAS</h1>
        <hr>
        <button type="button" name="button"><a href="camisas/camisa.php"><fieldset id="ca"></fieldset></a></button>
        <hr>
        <h1>VIDEO GAMES</h1>
        <hr>
        <button type="button" name="button"><a href="videogame/vide.php"><fieldset id="vid"></fieldset></a></button>
      </div>
    </center>
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
