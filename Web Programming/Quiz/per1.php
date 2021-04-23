<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina 1</title>
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
    <center>
      <fieldset id="fiel1">
    <h1 >Responda as perguntas</h1>
    <hr>
    <form  method="post">
<div class="enun">


    <h2>Pergunta 1</h2>
    <p style="font-size: 100px;">Qual a fórmula da cafeina?</p>
    </div>
    <hr>
    <div class="per">


    <label><input type="radio" name="p1" value="A) C8h10n4o2">A) C8h10n4o2</label>
  <label><input type="radio" name="p1" value="B) C2h10n4o2">B) C2h10n4o2</label>
    <label><input type="radio" name="p1" value="C) C8h5n4o2">C) C8h5n4o2</label>
    <label><input type="radio" name="p1" value="D) C8h10n4o1">D) C8h10n4o1</label>
    <label><input type="radio" name="p1" value="E) C8h10n8o2">E) C8h10n8o2</label> <br>
    <input type="submit" name="" value="Enviar">
    </div>
          </fieldset>
<?php
if (isset($_POST['p1'])) {
  $_SESSION['p1'] = $_POST['p1'];
  header("location:per2.php");
  if ($_SESSION['p1'] == "A) C8h10n4o2")
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
