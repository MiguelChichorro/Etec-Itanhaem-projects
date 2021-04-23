<?php session_start();  ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<style type="text/css">
*{
	outline: none;
}
	body{
		animation: bod 5s infinite ;
		background-image: url(wall.jpg);
		background-size: cover;

	}

			@keyframes bod{
			from{

            background-color: black;


			}
			to{

            background-image: url(wall.jpg);
						background-size: cover;
			}
		}
		html{
			overflow: hidden;
		}
		#titu{
			width: 400px;
			height: 400px;
			position: relative;
			top: 30px;
			left: 45px;
			animation: titulo 7s;
		}
		#caf{
			width: 40px;
			height: 40px;
		  cursor: pointer;
		}
		.botao{
			height: 40px;
			width: 180px;
			border-radius: 5px;
			background-color: red;
			border: solid;
			cursor: pointer;
			position: relative;
			top:-50px;
			left: 150px;
			transition: 0.5s;
			animation: bt1 8s;
		}
		.botao:hover{
			background-color: green;
		}
		.botao2{
			height: 40px;
			width: 180px;
			border-radius: 5px;
			background-color: red;
			border: solid;
			cursor: pointer;
			position: relative;
			transition: 0.5s;
      top:-50px;
			left: 150px;
			animation: bt2 8s;
		}
		.botao2:hover{
			background-color: green;
		}
		input[type="submit"]{
			background: none;
			font-size: 30px;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
		}
		#começo{
			height: 600px;
			width: 500px;
			background-color: rgba(0, 0, 0, 0.5);
			position: relative;
			top: 20px;
			left: 100px;
			border-radius: 30px;
			border: 10px ridge orange;
			animation: começo 5s;

		}
		@keyframes começo{
		from{

				left: -40%;
				transform: scaleX(-1);

		}
		to{
      left: 100px;
			transform: scaleX(1);

		}
	}
	@keyframes titulo{
	from{

				top: 30px;

	}
	to{

				top: 30px;
				left: 45px;
				transform :rotate(360deg);
	}
}
@keyframes bt1{
from{

		bottom: -20%;
		transform: scaleY(-1);


}
to{
	top:-50px;
 left: 150px;
			transform: scaleY(1);
}
}
@keyframes bt2{
from{


	bottom: -20%;
	 transform: scaleY(-1);

}
to{

	top:-50px;
 left: 150px;
			transform: scaleY(1);
}
}
	</style>
	<title>animação</title>
</head>
<body>
	<form action="loguin.php" method="post">

	<div id="começo">
		<img src="titu.png" alt="titulo" id="titu">


<label><div class="botao">
		<input type="submit" value="Começar" sty>
			<img src="caf.png" alt="café" id="caf" aling="right">
</div></label>
	</form>

	</div>


</body>
</html>
