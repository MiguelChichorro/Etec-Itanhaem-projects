<style media="screen">
  body{
    font-family: "Courier New"
  }
  .resposta{
    width: 1000px;
    height: 500px;
    background-color: rgba(0, 0, 0, 0.4);
    margin-top: 75px;
    margin-left: 200px;
    border-radius: 10px;
  }
  h1{
    padding-top: 15px;
  }
  p{
    font-size: 20px;
  }
  .cartao{
    float: right;
    margin-right: 40px;
    background-color: none;
    width: 400px;
    height: 250px;
    margin-top: -8px;
  }
  .dados{
    background-color: none;
    width: 500px;
    height: 250px;
    margin-left: 40px;
  }
  hr{
    border-color: black;
  }
  button{
    width: 100px;
    border-radius: 10px;
    border: solid;
    margin-top: 15px;
    margin-left: 300px;
    padding: 5px;
    background: none;
    border-color:#0000CD;
    color:#0000CD;
    transition: 0.25s;
    cursor: pointer;
    outline: none;
    margin-top: 50px;
    margin-left: 450px;
  }
  button:hover{
    background-color: #0000CD;
    color:white;
  }
</style>
<div class="resposta">
  <center>
    <h1>Sua compra foi bem efetuada</h1>
  </center>
  <hr>
  <div class="cartao">
    <h2>Dados do Cartão</h2>
    <hr>
    <?php
      echo "<p>-Seu número de CVV é ".$_POST['cvv']. "</p>";
      echo "<p>-Bandeira ".$_POST['bandeira']. "</p>";
      echo "<p>-Validade ".$_POST['validade']. "</p>";
    ?>
  </div>
  <div class="dados">
    <h2>Seus dados</h2>
    <hr>
    <?php
      echo "<p>Parabens senhor(a) <br>".$_POST['nome']. "<br> Do CPF ".$_POST['cpf']. "</p>";
      echo "<p>Seu comprovante de pagamento sera enviado para o E-mail: ".$_POST['email']. "</p>";
      echo "<p>Tenha um otimo dia!</p>";
    ?>
  </div>
  <button type="button" name="button" onclick="window.open('index.html'),window.close('PHP.php');">Voltar a compra</button>
</div>
