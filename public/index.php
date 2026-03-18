<?php

require_once "DB/database.php";
require_once "Controller/ParticipanteController.php";
require_once "Controller/EventoController.php";
require_once "Controller/PagamentoController.php";

$ParticipanteController = new ParticipanteController($pdo);
$Participantes = $ParticipanteController->listarParticipante();

$EventoController = new EventoController($pdo);
$Evento = $EventoController->listarEvento();

$PagamentoController = new PagamentoController($pdo);
$pagamentos = $PagamentoController->listarPagamento($pdo);

?>





<?php

$pagina = $_GET['pagina'] ?? 'resultado';
$acao = $_GET['acao'] ?? 'index';

$controllerName = ucfirst($pagina) . "Controller";

require "MVC/Controller/$controllerName.php";

$controller = new $controllerName();
$controller->$acao();