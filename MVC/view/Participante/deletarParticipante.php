<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";

$ParticipanteController = new ParticipanteController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $Participante = $ParticipanteController->deletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>