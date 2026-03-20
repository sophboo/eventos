<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";

$ParticipanteController = new ParticipanteController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Participantes = $ParticipanteController->deletar($id);
    header('Location: ../../../public/index.php');
} else {
    header('Location: ../../../public/index.php');
}
?>