
<style media="screen">
  body{
    color: white;
    background-color: black;
    font-size: 30px;
  }
  fieldset{
    width: 450px;
    height: 150px;
    border-radius: 25px;
    margin-top: 150px;
    padding-top: 50px;
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
  echo "<center>";
  echo "<h1>Porcentagens</h1>";
  echo "<fieldset>";
  echo $_POST['botao'];
  echo "<br>";
  echo "<br>";
  echo "<button type=button name=button onclick=window.open('index.html'); window.close();>Escolher outro gênero</button>";
  echo "</fieldset>";
  echo "</center>";
?>
