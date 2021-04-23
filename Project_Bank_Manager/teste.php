<?php
session_start();
include 'conexao.php';
$id = $_SESSION['COD_USER'];

echo $id;

?>
<form method="post">
	<select name="periodo">
		<option value="7">7</option>
		<option value="15">15</option>
		<option value="30">30</option>
	</select>
	<button>Enviar</button>
</form>
<?php
if(isset($_POST['periodo'])){
	$query = '
			SELECT * FROM tb_transacao as tra
	        inner join tb_forma as form on(tra.id_forma = form.cd_forma)
	        inner join tb_categoria as cat on(tra.id_categoria = cat.cd_categoria)
	        where
	        tra.id_usuario = '. $id.' AND 
	        DT_TRANSACAO BETWEEN date_sub(current_date(), interval '.$_POST['periodo'].' day) and current_date() 
	        ORDER BY CD_TRANSACAO DESC ';

		$res = $mysqli->query($query);

	if($res){
		while($exibe = $res->fetch_object()){
			echo $exibe->vl_transacao;
		}
	}
}
?>

