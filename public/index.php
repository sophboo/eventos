<?php
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/EventoController.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";

$EventoController = new EventoController($pdo);
$ParticipanteController = new ParticipanteController($pdo);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
</head>
<body>

<h1>Eventos</h1>

<?php
$EventoController->listar();
?>

<hr>

<h1>Participantes</h1>



<?php
$ParticipanteController->listar();
?>

</body>
</html>