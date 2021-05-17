<style media="screen">
  body{
   background-color: black;
   color: white;
   font-size: 20px;
  }
fieldset{

  margin-top: 75px;
  width: 300px;
}

button{
  background: none;
  border: 2px solid;
  border-color: white;
  border-radius: 9px;
  color: white;
  outline: none;
  text-align: center;
  transition: 0.50s;
  width: 100px;
  height: 35px;
  cursor: pointer;
}
button:focus{
  border-color: green;
}
button:hover{
  border-color: green;
}
img{
 border-radius: 200px;
 width: 300px;
 height: 300px;
}
</style>

<?php
echo "<meta charset=utf-8>";
echo "<center>";
echo "<fieldset>";
if (isset($_POST['nome'])) {

      $mostrar = "perfil/" .basename($_FILES['foto']['name']);
      if(move_uploaded_file($_FILES['foto']['tmp_name'], $mostrar))
      {
        echo "<img src='".$mostrar."'>";
      }
      else {
        echo "ERRO DE UPLOAD";
      }
echo "<br>";
echo "<br>";
  echo "Nome:".$_POST['nome'];
  echo "<br>";
  echo "<br>";
  echo "Idade:".$_POST['idade'];
  echo "<br>";
  echo "<br>";
  echo "Senha:".$_POST['senha'];
  echo "<br>";
  echo "<br>";
  echo "SEXO:".$_POST['sexo'];
  echo "<br>";
  echo "<br>";
  echo "Formação:".$_POST['formaçao'];
  echo "<br>";
  echo "<br>";

    echo "Hobbie: <br>";foreach ($_POST['hobbie'] as $key) {
    	echo  "- ". $key ."<br>";
    }
}
  echo "</fieldset>";
  echo "</center>";
 ?>
 <br>
 <center>
 <button type="button" name="button" onclick="window.open('index.html'); window.close();">Reenviar</button>
  </center>
