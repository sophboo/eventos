<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/EventoController.php";

$EventoController = new EventoController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Eventos = $EventoController->buscarEventos($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
</head>
<body>
   <form method="post">
    <label>Evento:</label>
    <input type="text" name="nome" value="<?=$Eventos['nome'];?>" required><br>

    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$Eventos['descricao'];?>" required><br>

    <label>Horário:</label>
    <input type="time" name="horario" value="<?=$Eventos['horario'];?>" required><br>

    <label>Local:</label>
    <input type="text" name="local" value="<?=$Eventos['local'];?>" required><br>

    <label>Quantidade de pessoas:</label>
    <input type="text" name="numero" value="<?=$Eventos['numero'];?>" required><br>

    <label>Data:</label>
    <input type="date" name="data" value="<?=$Eventos['data'];?>" required><br>

    <input type="submit" value="Salvar">
</form>
</body>
</html>
<?php
} else {
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $numero = $_POST['numero'];
    $data = $_POST['data'];

    $EventoController->editarEvento($id, $nome, $descricao, $horario, $local, $numero, $data);

    header('Location: ../../../public/index.php');
}

?>