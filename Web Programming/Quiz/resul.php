<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
    *{
outline: none;
      font-family: "Cooper";
    }
    #fiel1{
      height: auto;
      border-radius: 30px;
      border: 10px ridge orange;
    }
    img{
      height: 400px;
      width: 400px;
      display: inline;
      border-radius: 1000px;
      border: 4px ridge green;
      margin-left: 10px;
    }
    .per{
      margin-top: 190px;
    }
    p{
      font-size: 50px;
    }
    h1{
      font-size: 60px;
    }
    hr{

      border-color: black;
    }
    #perguntas{
      font-size: 30px;
    }
#hrp{
  border-style: dashed;
}
body{

  animation: bd 1s ;
}
@keyframes bd {

  from{

    background: black;
  }
  to{

    background: none;
  }

}
input[type="submit"]{

border-radius: 100px;
background: none;
border: 6px ridge orange;
cursor: pointer;
width: 150px;
height: 45px;
margin-top: 40px;
font-size: 20px;
transition: 1s;

}
input[type="submit"]:hover{
background-color: green;
border: 6px ridge green;
color: white;
}
#q{
  font-size: 20px;
}
    </style>
    <meta charset="utf-8">
    <title>resultado</title>
  </head>
  <body>
    <center>
      <?php
      if ($_SESSION['Score'] <= 2)
      {
       $_SESSION['Total'] = "I";
      }
      else if ($_SESSION['Score'] == 3)
      {
       $_SESSION['Total'] = "R";
      }
      else if ($_SESSION['Score'] == 4)
      {
       $_SESSION['Total'] = "B";
      }
      else if ($_SESSION['Score'] == 5)
      {
       $_SESSION['Total'] = "MB";
      }

       ?>

<fieldset id="fiel1">

<div class="comple">

      <div class="foto" style="float: left">

    <?php echo $_SESSION['foto'];
          echo "<br>";
          echo "<p id='q'>";
          echo $_SESSION['name'];
            echo "</p>";?>
        </div>
<div class="total">
  <h1>TOTAL</h1>
          <p>Acertos: <?php echo $_SESSION['Score'];?>
          Erros: <?php echo $_SESSION['Error'];?>
          Nota: <text id="nota"><?php echo $_SESSION['Total'];?></text> <br><br>

          <?php if ( $_SESSION['Total'] == "MB"){
           echo "Parabéns você foi Muito Bem";
         }
         else if ( $_SESSION['Total'] == "B"){
           echo "Parabéns você foi Bem";
         }
         else if ( $_SESSION['Total'] == "R"){
           echo "Você está Regular estude mais";
         }
         else if ( $_SESSION['Total'] == "I"){
           echo "Precisa estudar mais, tá uma ofensa para humanidade";
         }

            ?></p>

        </div>
        </div>

  <div class="per">
    <hr>
      <h1>RESPOSTAS</h1>



  <div id="per1">

    <p id="perguntas">Pergunta 1: Qual a fórmula da cafeina? <br><br>Resposta certa:A) C8h10n4o2 | Sua resposta:<?php echo $_SESSION['p1'];?></p>

      </div>
      <hr id="hrp">
        <div id="per2">
  <p id="perguntas">  Pergunta 2: Qual é a capital da suiça?<br><br> Resposta certa:D) Berna | Sua resposta:<?php echo $_SESSION['p2'];?></p>

      </div>
      <hr id="hrp">
        <div id="per3">
  <p id="perguntas">  Pergunta 3: Qual a maior bilheteria do mundo?<br><br> Resposta certa:C) Vingadores | Sua resposta:<?php echo $_SESSION['p3'];?></p>

      </div>
      <hr id="hrp">
        <div id="per4">
  <p id="perguntas">  Pergunta 4: Qual a maior cidade em extensão territorial do mundo? <br><br>Resposta certa:E) Altamira | Sua resposta:<?php echo $_SESSION['p4'];?></p>

      </div>
      <hr id="hrp">
        <div id="per5">
  <p id="perguntas">  Pergunta 5: Qual a fruta mais doce do mundo? <br><br>Resposta certa:A) Mangas Carabao | Sua resposta:<?php echo $_SESSION['p5'];?></p>

      </div>

</div>
<form action="index.php" method="post">
  <input type="submit" name="" value="Menu">
</form>
    </center>
    </fieldset>
  <?php    if ( $_SESSION['Total'] == "MB"){
     echo "<style> #nota {color: blue;}</style>";
   }
   else if ( $_SESSION['Total'] == "B"){
     echo "<style> #nota {color: blue;}</style>";
   }
   else if ( $_SESSION['Total'] == "R"){
     echo "<style> #nota {color: #daa520;}</style>";
   }
   else if ( $_SESSION['Total'] == "I"){
     echo "<style> #nota {color: red;}</style>";
   }
   if ($_SESSION['p1'] == "A) C8h10n4o2" ) {
     echo "<style>#per1{color: green;}</style>";
   }
   else{
     echo "<style> #per1{color: red;}</style>";
   }
   if ($_SESSION['p2'] == "D) Berna" ) {
     echo "<style>#per2{color: green;}</style>";
   }
   else{
     echo "<style> #per2{color: red;}</style>";
   }
   if ($_SESSION['p3'] == "C) Vingadores" ) {
     echo "<style>#per3{color: green;}</style>";
   }
   else{
     echo "<style> #per3{color: red;}</style>";
   }
   if ($_SESSION['p4'] == "E) Altamira" ) {
     echo "<style>#per4{color: green;}</style>";
   }
   else{
     echo "<style> #per4{color: red;}</style>";
   }
   if ($_SESSION['p5'] == "A) Mangas Carabao" ) {
     echo "<style>#per5{color: green;}</style>";
   }
   else{
     echo "<style> #per5{color: red;}</style>";
   }
   ?>

  </body>
  <?php session_destroy(); ?>
</html>
