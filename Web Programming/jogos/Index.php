<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bem-Vindo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
	<center>
		<fieldset>
			<form method="POST">
				<input type="text" name="Nome" placeholder="Nome" required></input>
				<br>
				<br>
				<input type="password" name="Senha" placeholder="Senha" required></input>
				<br>
				<br>
				<button type="submit" id="btcra" class="btn btn-primary">Enviar</button>
			</form>
				<br>
			<b><a href="Cadastro.php">Cadastre-se Aqui</a></b>
		</fieldset>
	</center>
<?php

if (isset($_POST['Nome'])) {

$sql = "SELECT * FROM tb_usuario WHERE nm_usuario = '".$_POST['Nome']."'AND ds_senha = '".$_POST['Senha']."'";
if ($result = $mysqli->query($sql)) {
       while ($obj = $result->fetch_object()) {
           header("location:Outro.php");

       }
     }
 }
?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
