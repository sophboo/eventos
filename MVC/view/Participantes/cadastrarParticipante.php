<?php
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";

$ParticipanteController = new ParticipanteController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    if($ParticipanteController->cadastrar($nome, $telefone, $email)){
        header('Location: ../../../public/index.php');
        exit;
    } else {
        echo "Erro ao cadastrar";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Participante</title>
</head>
<body>

<h2>Cadastrar Participante</h2>

<form method="post">
    
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br> 
    
    <label>Telefone:</label>
    <input type="number" name="telefone" required><br><br> 

    <label>E-mail:</label>
    <input type="email" name="email" required><br><br> 

    <input type="submit" value="Cadastrar">

</form>

</body>
</html>