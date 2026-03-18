<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Participante</title>
</head>
<body>
    
 <form method="post">

   <label for="nome">Nome: </label>
   <input type="text" name="nome" required><br><br>

   <label for="telefone">Telefone: </label>
   <input type="number" name="telefone" required><br><br>
   
 <label for="email">Email: </label>
 <input type="email" name="email" required><br><br>

 <label for="senha">Senha: </label>
 <input type="password" name="senha" required><br><br>

 <input type="submit">

 </form>

</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";

$ParticipanteController = new ParticipanteController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

$ParticipanteController->cadastrarParticipante($nome,$telefone,$email,$senha);
header('Location: ../../../public/index.php');

}

?>