<?php

require_once "C:/Turma1/xampp/htdocs/MVC/DB/database.php";
require_once "C:/Turma1/xampp/htdocs/MVC/Controller/EventoController.php";

$EventoController = new EventoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $Evento = $EventoController->deletarEvento($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>