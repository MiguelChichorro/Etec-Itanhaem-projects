<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina 3</title>
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
    <h2>Pergunta 3</h2>
    <p style="font-size: 88px;">Qual a maior bilheteria do mundo?</p>
    </div>
    <hr>
    <div class="per">
    <label><input type="radio" name="p3" value="A) Titanic">A) Titanic</label>
    <label><input type="radio" name="p3" value="B) Avatar">B) Avatar</label>
    <label><input type="radio" name="p3" value="C) Vingadores">C) Vingadores</label>
    <label><input type="radio" name="p3" value="D) Star Wars">D) Star Wars</label>
    <label><input type="radio" name="p3" value="E) Show da Xuxa">E) Show da Xuxa</label> <br>
    <input type="submit" name="" value="Enviar">
    </div>
    </fieldset>
<?php
if (isset($_POST['p3'])) {
  $_SESSION['p3'] = $_POST['p3'];
  header("location:per4.php");
  if ($_SESSION['p3'] == "C) Vingadores")
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
