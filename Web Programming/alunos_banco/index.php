<?php
	include('conexao.php');
	ini_set('display_errors', 0 );
	error_reporting(0);(a)
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Alunos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="#">Alunos Babacas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
		<div class="container">
			<div class="row" style="margin-top: 10%;">
				<div class="col-md-4">
					<h2>Quantidade</h2>
					<fieldset style="width: auto; border: 1px solid black; text-align: center;;">
						<p>
							<h5><u>Total de alunos</u></h5>
							<?php
								$sql= "SELECT COUNT(cd_aluno) as conta FROM tb_aluno";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->conta." Alunos";
									}
								}
							?>
						</p>
						<p>
							<h5><u>Alunos de cada idade</u></h5>
							<?php
								$sql= "SELECT COUNT(cd_aluno) as conta, YEAR(CURDATE()) - YEAR(dt_nascimento) AS idade  FROM tb_aluno GROUP BY dt_nascimento ";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo "|".$obj->conta." ".$obj->idade." anos| ";
									}
								}
							?>
						</p>
						<p>
							<h5><u>Alunos de cada sexo</u></h5>
							<?php
								$sql= "SELECT COUNT(cd_aluno) as conta, st_sexo as sexo FROM tb_aluno GROUP BY st_sexo ";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->conta." ".$obj->sexo."<br>";
									}
								}
							?>
						</p>
					</fieldset>
				</div>
				<div class="col-md-4">
					<h2>Idade</h2>
					<fieldset style="width: auto; border: 1px solid black; text-align: center;">
						<p>
							<h5><u>Aluno(ao mais velho</u></h5>
							<?php
								$hoje = date('Y/m/d');
								$sql= "SELECT MIN(dt_nascimento) as velho FROM tb_aluno";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										$velhao = $obj->velho;
									}
								}
								$sql= "SELECT nm_aluno as nome FROM tb_aluno WHERE dt_nascimento = '".$velhao."'";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->nome." ".($hoje-$velhao)." Anos";
									}
								}
							?>
						</p>
						<p>
							<h5><u>Aluno(ao mais novo</u></h5>
							<?php
								$hoje = date('Y/m/d');
								$sql= "SELECT MAX(dt_nascimento) as novo FROM tb_aluno";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										$novao = $obj->novo;
										$novin = $hoje-$novao;
									}
								}
								$sql= "SELECT nm_aluno as nome FROM tb_aluno WHERE dt_nascimento = '".$novao."'";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->nome." ".$novin." Anos";
									}
								}
							?>
						</p>
						<p>
							<h5><u>Média de idades</u></h5>
							<?php
								$sql= "SELECT nm_aluno as nome, ROUND(AVG(YEAR(CURDATE()) - YEAR(dt_nascimento))) as idade FROM tb_aluno";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->idade." Anos";
									}
								}
							?>
						</p>
					</fieldset>
				</div>
				<div class="col-md-4">
					<h2>Altura</h2>
					<fieldset style="width: auto; border: 1px solid black; text-align: center;">
						<p>
							<h5><u>Aluno(a) mais baixo</u></h5>
							<?php
								$sql= "SELECT MIN(vl_altura) as anao  FROM tb_aluno ";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										$baixo =$obj->anao;
									}
								}
								$sql= "SELECT nm_aluno as nome FROM tb_aluno WHERE vl_altura = ".$baixo;
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->nome." ".round($baixo,2)." Metros";
									}
								}
							?>
						</p>
						<p>
							<h5><u>Aluno(a) mais alto</u></h5>
							<?php
								$sql= "SELECT MAX(vl_altura) as poste  FROM tb_aluno ";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										$alto =$obj->poste;
									}
								}
								$sql= "SELECT nm_aluno as nome FROM tb_aluno WHERE vl_altura = ".$alto;
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->nome." ".$alto." Metros";
									}
								}
							?>
						</p>
						<p>
							<h5><u>Média de altura</u></h5>
							<?php
								$sql= "SELECT nm_aluno as nome, ROUND(AVG(vl_altura),2) as altura FROM tb_aluno";
								if ($result = $mysqli->query($sql)) {
									while ($obj = $result->fetch_object()) {
										echo $obj->altura." Metros";
									}
								}
							?>
						</p>
					</fieldset>
				</div>
			</div>
		</div>
	</body>
</html>
