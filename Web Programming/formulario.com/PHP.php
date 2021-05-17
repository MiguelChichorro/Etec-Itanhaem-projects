<style type="text/css">
	*{
		text-align: center;
		width: 200px;

	}

</style>
<?php
//Identificação
echo "<fieldset>";
echo"<meta charset=utf-8>";
echo "<h1>Identificação</h1>";
echo "<hr>";
echo "Nome: ".$_POST['nome'];
  echo "<br>";
  echo "Data de Nascimento: ".$_POST['data'];
  echo "<br>"; 
  echo "Sexo: ".$_POST['sexo'];
  echo "<br>";
  echo "R.G: ".$_POST['rg'];
  echo "<br>";
  echo "C.P.F: ".$_POST['cpf'];
  echo "<br>";  
  


  //Localização

  echo "<h1>Localização</h1>";
  echo "<hr>";
  echo "C.E.P: ".$_POST['cep'];
  echo "<br>";
  echo "Endereço: ".$_POST['endereço'];
  echo "<br>"; 
  echo "Bairro: ".$_POST['bairro'];
  echo "<br>";
  echo "Cidade: ".$_POST['cidade'];
  echo "<br>";
  echo "Telefone: ".$_POST['tel'];
  echo "<br>";
  echo "E-mail: ".$_POST['cpf'];
  echo "<br>"; 
 
  //Pretensão
 
  echo "<h1>Pretensão</h1>";
  echo "<hr>";
  foreach ($_POST["area"] as $area) {
  	echo "- " . $area . "<br>";
  }
   echo "Cargo: ".$_POST['cargo'];
  echo "<br>";
  

  //Formação
 
  echo "<h1>Formação</h1>";
  echo "<hr>";
    echo "Nível: ".$_POST['nivel'];
  echo "<br>";
  echo "Instituição: ".$_POST['instituição'];
  echo "<br>";
  echo "Data de conclusão: ".$_POST['conclusao'];
  echo "<br>"; 
  echo "</fieldset>";
  


 ?>