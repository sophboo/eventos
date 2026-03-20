<?php
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/EventoController.php";

$EventoController = new EventoController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $numero = $_POST['numero'];
    $data = $_POST['data']; 

    if($EventoController->cadastrarEvento($nome, $descricao, $horario, $local, $numero, $data)){
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
    <title>Cadastrar Evento</title>
</head>
<body>

<h2>Cadastrar Evento</h2>

<form method="post">
    
    <label>Evento:</label>
    <input type="text" name="nome" required><br><br>
    
    <label>Descrição:</label>
    <input type="text" name="descricao" required><br><br>
    
    <label>Horário:</label>
    <input type="time" name="horario" required><br><br>

    <label>Local:</label>
    <input type="text" name="local" required><br><br>
    
    <label>Quantidade de pessoas:</label>
    <input type="number" name="numero" required><br><br>
    
    <label>Data:</label>
    <input type="date" name="data" required><br><br>

    <input type="submit" value="Cadastrar">

</form>

</body>
</html>