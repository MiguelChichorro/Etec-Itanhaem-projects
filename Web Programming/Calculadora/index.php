<?php session_start();
if(!isset($_SESSION['resposta'])) {
  $_SESSION['resposta'] = 0;
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="style.css">
     <meta charset="utf-8">
     <title>calcu</title>
     <?php
     if(isset($_POST['calcu'])){
       if ($_POST['calcu'] == "somar") {
         $_SESSION['resposta'] += $_POST['numero'];
       }
       if ($_POST['calcu'] == "subtrair") {
         $_SESSION['resposta'] -= $_POST['numero'];
       }
       if ($_POST['calcu'] == "multiplicar") {
         $_SESSION['resposta'] *= $_POST['numero'];
       }
       if ($_POST['calcu'] == "dividir") {
         $_SESSION['resposta'] /= $_POST['numero'];
       }
       $resposta = $_SESSION['resposta'];
     }

      ?>

   </head>
   <body>
     <center>
       <fieldset id="fil">
         <legend><fieldset>CALCULADORA 5K</fieldset></legend>
     <form method="post">
     <input type="number" value="<?php echo $_SESSION['resposta'];?>" disabled><br><br>
     <input type="number" name="numero" placeholder="Faça sua conta"><br>
     <label><input type="radio" name="calcu" value="somar">+Somar+</label><br>
     <label><input type="radio" name="calcu" value="subtrair">-Subtrair-</label><br>
     <label><input type="radio" name="calcu" value="multiplicar">*Multiplicar*</label><br>
     <label><input type="radio" name="calcu" value="dividir">/Dividir/</label><br><br>
     <input type="submit" value="Calcular">

</form>
<fieldset>


  <legend>RESPOSTA</legend>
  <?php

    echo $_SESSION['resposta'];
?>
</fieldset>

</p>
</fieldset>
</center>
   </body>
 </html>
