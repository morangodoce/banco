<?php
include('config.php');

if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['telefone']) || isset($_POST['data_nasc']) || isset($_POST['sexo']) || isset($_POST['cidade']) 
|| isset($_POST['estado']) || isset($_POST['endereco'])){

  if(strlen($_POST['nome']) == 0){
      echo "Preencha seu nome";
  }else if(strlen($_POST['email']) == 0){
      echo "Preencha seu e-mail";
  }else if(strlen($_POST['telefone']) == 0){
      echo "Preencha seu telefone";
  }else if(strlen($_POST['data_nasc']) == 0){
      echo "Preencha sua data de nascimento";
    }else if(strlen($_POST['sexo']) == 0){
      echo "Preencha seu sexo";
  }else if(strlen($_POST['cidade']) == 0){
      echo "Preencha sua cidade";
  }else if(strlen($_POST['estado']) == 0){
      echo "Preencha seu estado";
  }else if(strlen($_POST['endereco']) == 0){
      echo "Preencha seu endereço";
  }else{
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
  }
}

 
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    input[type="radio"] {
      margin-right: 4px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <title>Formulário</title>
</head>
<body>
    
  <form action = "cadastro.php" method= "POST" class="formLogin">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <label for="dataNascimento">Data de Nascimento:</label>
    <input type="date" id="dataNascimento" name="dataNascimento" required>

    <label>Gênero:</label>
    <label for="masculino"><input type="radio" id="masculino" name="sexo" value="masculino" required> Masculino</label>
    <label for="feminino"><input type="radio" id="feminino" name="sexo" value="feminino" required> Feminino</label>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
      <option value="" disabled selected>Selecione o estado</option>
      <option value="ac">Acre</option>
      <!-- Adicione os demais estados conforme necessário -->

    </select>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>

    <a href = "login.php">Faça Login</a>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>