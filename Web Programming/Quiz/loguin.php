<?php session_start();
if (!isset($_SESSION['nome']))
{
  $_SESSION['Score'] = 0;
  $_SESSION['Error'] = 0;
}
;
?>
<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
    *{
    	outline: none;
    }
      img{
        height: 350px;
        width: 350px;
        display: inline;
        border-radius: 1000px;
        border: 4px ridge green;
        margin-left: 10px;
      }
      label{
        cursor: pointer;
      }
      #fiel1{
        height: 740px;
        border-radius: 30px;
  			border: 10px ridge orange;
      }

input[type="radio"]{

  position: relative;
  left: 170px;
  top: 10px;
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
margin-left: 680px;
transition: 1s;

}
input[type="submit"]:hover{

background-color: green;

border: 6px ridge green;
color: white;


}
div .img{

  float: left;
  position: relative;
  left: 20px;
}
 div .bt{

   width: 100px;
   margin-top: 90px;
 }
 html{

   overflow: hidden;
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

 input[type="text"]{
border: 6px ridge orange;
text-align: center;
outline: none;
font-size: 15px;
transition: 1s;
 }
  input[type="text"]:focus{
border: 6px ridge green;
height: 30px;
width: 250px;
font-size: 20px;
  }
    </style>
    <meta charset="utf-8">
    <title>Quiz</title>
  </head>
  <body>


    <form method="post">

        <fieldset id="fiel1">
<center>
      <h1>Login <br><input type="text" name="nome" placeholder="Digite seu nome" required></h1><br><br>
</center>
    <div class="imag">


      <div class="img">
        <label><img src='tony.jpg'><br><input type="radio" name="foto" value="<img src='tony.jpg'>"></label>
      </div>
<div class="img">
        <label><img src='troll.png'><br><input type="radio" name="foto" value="<img src='troll.png'>"></label>
        </div>
<div class="img">
        <label><img src='genio.png'><br><input type="radio" name="foto" value="<img src='genio.png'>"></label>
        </div>
<div class="img">
        <label><img src='ok.jpg'><br><input type="radio" name="foto" value="<img src='ok.jpg'>"></label><br><br>
        </div>
      </div>


<div class="bt">
  <input type="submit" name="" value="Enviar">
</div>



            </fieldset>

    </form>
<?php
if (isset($_POST['nome']))
{
  $_SESSION['name'] = $_POST['nome'];
}
if (isset($_POST['foto'])) {
    $_SESSION['foto'] = $_POST['foto'];
    header("location:per1.php");
}
?>
  </body>
</html>
