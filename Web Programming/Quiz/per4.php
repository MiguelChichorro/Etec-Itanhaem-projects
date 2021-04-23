<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina 4</title>
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
    <h2>Pergunta 4</h2>
    <p style="font-size: 80px;">Qual a maior cidade em extensão territorial do mundo?</p>
    </div>
    <hr>
    <div class="per">


    <label><input type="radio" name="p4" value="A) Guatemala">A) Guatemala</label>
    <label><input type="radio" name="p4" value="B) Atlantida">B) Atlantida</label>
    <label><input type="radio" name="p4" value="C) Tóquio">C) Tóquio</label>
    <label><input type="radio" name="p4" value="D) Itanhaém">D) Itanhaém</label>
    <label><input type="radio" name="p4" value="E) Altamira">E) Altamira</label> <br>
    <input type="submit" name="" value="Enviar">
      </div>
      </fieldset>
<?php
if (isset($_POST['p4'])) {
  $_SESSION['p4'] = $_POST['p4'];
  header("location:per5.php");
  if ($_SESSION['p4'] == "E) Altamira")
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
