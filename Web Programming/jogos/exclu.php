<?php
include('conexao.php');
if (isset($_GET['jog'])) {
 $query = "DELETE FROM tb_jogos WHERE cd_jogos = '". $_GET['jog'] . "'";
 if ($result = $mysqli->query($query)) {
   header("location:Outro.php");
 }
}
 ?>
