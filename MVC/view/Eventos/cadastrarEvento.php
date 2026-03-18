<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <form method="post">
       <label for="evento">Evento:</label>
       <input type="text" name="evento" required><br> 
       
       <label for="descricao">Descrição:</label>
       <input type="text" name="descricao" required><br> 
       
       <label for="data">Data:</label>
       <input type="date" name="data" required><br> 

       <label for="horario">Horário:</label>
       <input type="time" name="horario" required><br> 
       
       <label for="local">Local:</label>
       <input type="text" name="local" required><br> 
       
       <label for="maximodeparticipantes">Número máximo de Participantes:</label>
       <input type="number" name="maximodeparticipantes" required><br> 
       

       <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/Eventos/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/Eventos/Controller/EventosController.php";

$EventosController = new EventosController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $evento = $_POST['evento'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $maximodeparticipantes = $_POST['maximodeparticipantes']; 

    if($EventosController->cadastrar($evento, $descricao, $data, $horario, $local, $maximodeparticipantes) === true){
    header('Location: ../../index.php');
    } else {
        echo "erro ao cadatrar";
    }
}

