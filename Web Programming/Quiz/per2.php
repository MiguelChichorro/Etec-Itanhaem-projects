<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina 2</title>
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
    font-size: 38px;
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

    <h2>Pergunta 2</h2>
    <p style="font-size: 100px;">Qual é a capital da suiça?</p>
    </div>
    <hr>
    <div class="per">
    <label><input type="radio" name="p2" value="A) Estocom">A) Estocom</label>
    <label><input type="radio" name="p2" value="B) Nova York">B) Nova York</label>
    <label><input type="radio" name="p2" value="C) Brasil">C) Brasil</label>
  <label> <input type="radio" name="p2" value="D) Berna">D) Berna</label>
    <label><input type="radio" name="p2" value="E) Genervia">E) Genervia</label><br>
    <input type="submit" name="" value="Enviar">
    </div>
        </fieldset>
<?php
if (isset($_POST['p2'])) {
  $_SESSION['p2'] = $_POST['p2'];
  header("location:per3.php");
  if ($_SESSION['p2'] == "D) Berna")
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
