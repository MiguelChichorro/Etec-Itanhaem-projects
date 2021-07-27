<style media="screen">
  body{
    background-color: black;
    color: white;
  }
  fieldset{
    height: auto;
    width: 300px;
    border-radius: 25px;
    margin-top: 100px;
  }
  button{
    height: 35px;
    width: 100px;
    border-radius: 25px;
    background: none;
    color: white;
    transition: 0.25s;
    outline: none;
  }
  button:hover{
    background: green;
    border-color: green;
    cursor: pointer;
  }
</style>
<?php
  $login=0;
  echo "<meta charset=utf-8>";
  echo "<center>";
  echo "<fieldset>";
  if ($_POST['email']=="joghl@hotmail.com") {
    $login++;
  }
  if ($_POST['senha']=="123") {
    $login++;
  }
  if ($login==2) {
    echo "<h1>Parabéns você entrou</h1>";
    echo "E-mail correto:joghl@hotmail.com";
    echo "<br>";
    echo "Senha correta: 123";
  }
  else {
    echo "VISH<br>TENTE NOVAMENT<br>UMA DICA: USE O PLACEHOLDER";
  }
  echo "<br>";
  echo "<br>";
  echo "<button type=button name=button onclick=window.open('index.html'); window.close();>Tentar novamente</button>";
  echo "</fieldset>";
  echo "</center>";
?>
