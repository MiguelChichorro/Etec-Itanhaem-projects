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
        height: 400px;
        width: 90%;
        background-color: white;
        border: solid 5px black;
        border-radius: 20px;
        overflow: auto;
      }
      div.body hr{ border: dashed; width: 99%;}
      b{
        color: red;
      }
      .botoes{
        height: 75px;
        width: 50%;
        background-color: white;
        border: solid 5px black;
        border-radius: 20px;
        padding-top: 13px;
      }
    </style>
    <meta charset="utf-8">
    <title>Bootstrap</title>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
  </head>
  <body style="background-color: #292b2c;font-family: 'ink free'">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><img src="st.png" alt="logo" id="logo"></a>
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
      <h1>COMPRAS</h1>
      <hr>
      <fieldset id="img">
        <?php
          if (isset($_SESSION['devil'])) {
            foreach ($_SESSION['devil'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['division'])) {
            foreach ($_SESSION['division'] as $key) {
              echo $key."<br>";
            }
          }
          if (isset($_SESSION['spider'])) {
            foreach ($_SESSION['spider'] as $key) {
              echo $key."<br>";
            }
          }
          if (isset($_SESSION['god'])) {
            foreach ($_SESSION['god'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['cyber'])) {
            foreach ($_SESSION['cyber'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['reddead'])) {
            foreach ($_SESSION['reddead'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['forza'])) {
            foreach ($_SESSION['forza'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['gta'])) {
            foreach ($_SESSION['gta'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['crash'])) {
            foreach ($_SESSION['crash'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['naruto'])) {
            foreach ($_SESSION['naruto'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['dead'])) {
            foreach ($_SESSION['dead'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['mortal'])) {
            foreach ($_SESSION['mortal'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['madmax'])) {
            foreach ($_SESSION['madmax'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['syndicate'])) {
            foreach ($_SESSION['syndicate'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['witcher'])) {
            foreach ($_SESSION['witcher'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['hollow'])) {
            foreach ($_SESSION['hollow'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['kart'])) {
            foreach ($_SESSION['kart'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['smash'])) {
            foreach ($_SESSION['smash'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['mario'])) {
            foreach ($_SESSION['mario'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['pokemon'])) {
            foreach ($_SESSION['pokemon'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['pcra'])) {
            foreach ($_SESSION['pcra'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['pcwar'])) {
            foreach ($_SESSION['pcwar'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['pcpichau'])) {
            foreach ($_SESSION['pcpichau'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['pccor'])) {
            foreach ($_SESSION['pccor'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['pcalien'])) {
            foreach ($_SESSION['pcalien'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['ps4pro'])) {
            foreach ($_SESSION['ps4pro'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['ps4branco'])) {
            foreach ($_SESSION['ps4branco'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['ps3'])) {
            foreach ($_SESSION['ps3'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['ps2'])) {
            foreach ($_SESSION['ps2'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['ps1'])) {
            foreach ($_SESSION['ps1'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['nintendoswitch'])) {
            foreach ($_SESSION['nintendoswitch'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['nintendoswitchlite'])) {
            foreach ($_SESSION['nintendoswitchlite'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['nintendo3ds'])) {
            foreach ($_SESSION['nintendo3ds'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['nintendodsxl'])) {
            foreach ($_SESSION['nintendodsxl'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['nintendowii'])) {
            foreach ($_SESSION['nintendowii'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['avengers'])) {
            foreach ($_SESSION['avengers'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['estrela'])) {
            foreach ($_SESSION['estrela'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['akat'])) {
            foreach ($_SESSION['akat'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['winter'])) {
            foreach ($_SESSION['winter'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['ball'])) {
            foreach ($_SESSION['ball'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['fallout'])) {
            foreach ($_SESSION['fallout'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['kra'])) {
            foreach ($_SESSION['kra'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['soci'])) {
            foreach ($_SESSION['soci'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['game'])) {
            foreach ($_SESSION['game'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['dino'])) {
            foreach ($_SESSION['dino'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['bosco'])) {
            foreach ($_SESSION['bosco'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['fogo'])) {
            foreach ($_SESSION['fogo'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['over'])) {
            foreach ($_SESSION['over'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['scor'])) {
            foreach ($_SESSION['scor'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['syndi'])) {
            foreach ($_SESSION['syndi'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['mousera'])) {
            foreach ($_SESSION['mousera'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['mousehyper'])) {
            foreach ($_SESSION['mousehyper'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['mouselogi'])) {
            foreach ($_SESSION['mouselogi'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['mousemulti'])) {
            foreach ($_SESSION['mousemulti'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['mousefor'])) {
            foreach ($_SESSION['mousefor'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['tecblack'])) {
            foreach ($_SESSION['tecblack'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['teclacor'])) {
            foreach ($_SESSION['teclacor'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['teclawar'])) {
            foreach ($_SESSION['teclawar'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['teclahyper'])) {
            foreach ($_SESSION['teclahyper'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['teclared'])) {
            foreach ($_SESSION['teclared'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['kraken'])) {
            foreach ($_SESSION['kraken'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['hyper'])) {
            foreach ($_SESSION['hyper'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['raptor'])) {
            foreach ($_SESSION['raptor'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['fortrek'])) {
            foreach ($_SESSION['fortrek'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['corsair'])) {
            foreach ($_SESSION['corsair'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['controlexbox'])) {
            foreach ($_SESSION['controlexbox'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['controleps4'])) {
            foreach ($_SESSION['controleps4'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['controleelite'])) {
            foreach ($_SESSION['controleelite'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['controlerevolu'])) {
            foreach ($_SESSION['controlerevolu'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['controle'])) {
            foreach ($_SESSION['controle'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['fone'])) {
            foreach ($_SESSION['fone'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['fonem'])) {
            foreach ($_SESSION['fonem'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['war'])) {
            foreach ($_SESSION['war'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['walk'])) {
            foreach ($_SESSION['walk'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['play'])) {
              foreach ($_SESSION['play'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['xboxonex'])) {
              foreach ($_SESSION['xboxonex'] as $key) {
             echo $key."<br>";
            }
          }
          if (isset($_SESSION['xboxoneslim'])) {
            foreach ($_SESSION['xboxoneslim'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['xboxonefat'])) {
            foreach ($_SESSION['xboxonefat'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['xbox360slim'])) {
            foreach ($_SESSION['xbox360slim'] as $key) {
               echo $key."<br>";
            }
          }
          if (isset($_SESSION['xbox360'])) {
            foreach ($_SESSION['xbox360'] as $key) {
               echo $key."<br>";
            }
          }
        ?>
      </fieldset>
    </div>
    <br>
    <br>
    <div class="botoes">
      <fieldset class="bt">
        <input type="button" class="btn btn-outline-info my-2 my-sm-0" value="Finalizar compra" onclick="window.location.href='index.php';" style="margin-right: 50px;"/>
        <?php echo "<b style=' font-size: 20px;'> Total: R$ ". $_SESSION['conta'] . "</b>"; ?>
        <input type="button" class="btn btn-outline-info my-2 my-sm-0" value="Cancelar compra" onclick="window.location.href='index.php';" style="margin-left: 50px;"/>
      </fieldset>
    </div>
    </center>
    <?php
      session_destroy();
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
