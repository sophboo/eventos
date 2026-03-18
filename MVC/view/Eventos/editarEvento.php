<?php

require_once "C:/xampp/htdocs/mvc/DB/Database.php";
require_once "C:\Turma2\xampp\htdocs\Eventos\Controller\EventosController.php";

$UsuarioController = new EventosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $usuario = $UsuarioController->buscarEventos($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <form method="post">
       <label for="evento">Evento:</label>
       <input type="text" name="text" value="<?=$Eventos['evento'];?>" required><br> 
       
       <label for="descricao">Descrição:</label>
       <input type="text" name="text" value="<?=$Eventos['descricao'];?>" required><br> 
       
       <label for="data">Data:</label>
       <input type="date" name="data" value="<?=$Eventos['data'];?>" required><br> 

       <label for="horario">Horário:</label>
       <input type="time" name="horario" value="<?=$Eventos['horario'];?>" required><br> 

       <label for="local">Local</label>
       <input type="text" name="local" value="<?=$Eventos['local'];?>" required><br> 

       <label for="maximodeparticipante">Máximo de participantes:</label>
       <input type="text" name="maximodeparticipantes" value="<?=$Eventos['maximodeparticipantes'];?>" required><br> 


       <input type="submit">
    </form>
</body>
</html>
<?php
} else {
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $evento = $_POST['evento'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $maximodeparticipantes = $_POST['maximodeparticipantes'];

    $EventosController->editar($evento, $descricao, $data, $data, $horario, $local, $maximodeparticipantes, $id);

    header('Location: ../../index.php');
}

?>