<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/EventoController.php";


require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";

$pagina = 'participante';
$acao = 'listar';

$controllerName = ucfirst($pagina) . "Controller";

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/$controllerName.php";

$controller = new $controllerName($pdo);
$controller->$acao();


?>


<?php

$pagina = $_GET['pagina'] ?? 'resultado';
$acao = $_GET['acao'] ?? 'index';

$controllerName = ucfirst($pagina) . "Controller";

require "MVC/Controller/$controllerName.php";

$controller = new $controllerName();
$controller->$acao();