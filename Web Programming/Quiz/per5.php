<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina 5</title>
  </head>
  <style media="screen">
  *{
outline: none;
    font-family: "Cooper";
  }
  #fiel1{
    height: 740px;
    border-radius: 30px;
    border: 10px ridge orange;
  }
  html{

    overflow: hidden;
  }
  hr{

    border-color: black;
  }
  .enun{

    font-size: 37px;
  }
  .per{
margin-top: 40px;
    font-size: 35px;
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
  label{

    cursor: pointer;
  }
  label:hover{

    color:blue;
  }
  label:active{

    color:red;
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
  </style>
  <body>
    <fieldset id="fiel1">
    <center>
    <h1>Responda as perguntas</h1>
    <hr>
    <form  method="post">

<div class="enun">
    <h2>Pergunta 5</h2>
    <p style="font-size: 89px;">Qual a fruta mais doce do mundo?</p>
    </div>
    <hr>
  <div class="per">
    <label><input type="radio" name="p5" value="A) Mangas Carabao">A) Mangas Carabao</label>
    <label><input type="radio" name="p5" value="B) Cebola Doce<">B) Cebola Doce</label>
    <label><input type="radio" name="p5" value="C) Morango Acarajé">C) Morango Acarajé</label>
    <label><input type="radio" name="p5" value="D) Mamão Papaia">D) Mamão Papaia</label>
    <label><input type="radio" name="p5" value="E) EU">E) EU</label> <br>
    <input type="submit" name="" value="Enviar">
  </div>
  </fieldset>
<?php
if (isset($_POST['p5'])) {
  $_SESSION['p5'] = $_POST['p5'];
  header("location:resul.php");
  if ($_SESSION['p5'] == "A) Mangas Carabao")
  {
    $_SESSION['Score'] += 1;
  }
  else
  {
    $_SESSION['Error'] += 1;
  }

}
?>


<center>
</form>
  </body>
</html>
