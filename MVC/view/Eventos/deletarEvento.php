<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/EventoController.php";

$EventoController = new EventoController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
   $EventoController->deletarEvento($id);
    header('Location: ../../../public/index.php');
} else {
    header('Location: ../../../public/index.php');
}
?>