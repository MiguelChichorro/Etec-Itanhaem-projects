
<meta charset="utf-8">
<?php
session_start();
$_SESSION['COD_USER'];
//if(!isset($_SESSION['COD_USER'])){header("location:index.php");}
include("conexao.php");
if(isset($_GET['cod'])) {
  $query = "DELETE FROM tb_transacao WHERE cd_transacao = '". $_GET['cod'] . "'";
  if($result = $mysqli->query($query)){
    	header("location:transacoes.php");
  }
  else{
  echo	'<script>
            alert("Nâo pode excluir, pois há registros relacionados");
            location.href = "addcat.php";
          </script>';
  }
}
      
if (isset($_GET['cat'])) {
  $query = "DELETE FROM tb_categoria WHERE cd_categoria = '". $_GET['cat'] . "'";
  if ($result = $mysqli->query($query)) {
  	header("location:addcat.php");
  }
  else{
    echo '<script>
            alert("Nâo pode excluir, pois há registros relacionados");
            location.href = "addcat.php";
          </script>';
  	//printf("Error: %s\n",$mysqli->error);
    //header("location:addcat.php");
  }
}

if (isset($_GET['fo'])) {
  $query = "DELETE FROM tb_forma WHERE cd_forma = '". $_GET['fo'] . "'";
  if ($result = $mysqli->query($query)) {
  	header("location:addforma.php");
  }
  else{
  	echo '<script>
            alert("Nâo pode excluir, pois há registros relacionados");
            location.href = "addcat.php";
          </script>';
  }
}
?>
