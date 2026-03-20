<?php
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/model/EventoModel.php";
class EventoController {
    private $EventoModel;
   
    public function __construct($pdo) {
        $this->EventoModel = new EventoModel($pdo);

    }
    public function listar() {
        $eventos = $this->EventoModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/eventos/MVC/view/Eventos/listarEvento.php";
    }

    public function buscarEventos($id){
        $Eventos = $this->EventoModel->buscarEventos($id);
        return $Eventos;
    }

    public function cadastrarEvento( $nome, $descricao, $horario, $local, $numero, $data){
        $this->EventoModel->cadastrarEvento( $nome, $descricao, $horario, $local, $numero, $data);
        return true;
    }
    
    public function editarEvento($id, $nome, $descricao, $horario, $local, $numero, $data){
    $this->EventoModel->editar($id, $nome, $descricao, $horario, $local, $numero, $data);
}

    public function deletarEvento($id){
        $Eventos = $this->EventoModel->deletarEvento($id);
        return $Eventos;
    }

}
