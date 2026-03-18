<?php

require_once "C:/xampp/htdocs/mvc/DB/Database.php";
require_once "C:/xampp/htdocs/mvc/Controller/EventosController.php";

$EventosController = new EventosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Eventos = $EventosController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}
?>