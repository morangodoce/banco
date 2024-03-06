<?php
include('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

  if(stelen($_POST['email']) == 0){
      echo "Preencha seu email";
  }else if(stelen($_POST['senha']) == 0){
      echo "Preencha seu senha";
  
    $nome = $mysqli ->real_escape_string($_POST['email']);
      $email = $mysqli ->real_escape_string($_POST['senha']);
      
        sql__code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'"
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
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="text" id="senha" name="senha" required>

    <a href = "token.php">Esqueci minha senha</a>

    <button type="submit">Enviar</button>
  </form>

  <a href = "cadastro.php">Ainda não tem cadastro? Cadastra-se aqui</a>  

</body>
</html>