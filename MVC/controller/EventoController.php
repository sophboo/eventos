<?php
require_once "C:/Turma2/xampp/htdocs/Eventos/Model/EventosModel.php";
class EventosController {
    private $EventosModel;
   
    public function __construct($pdo) {
        $this->EventosModel = new EventosModel($pdo);

    }
    public function listar() {
        $eventos = $this->EventosModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/Eventos/View/Eventos/listar.php";
    }

    public function buscarEventos($id){
        $Eventos = $this->EventosModel->buscarEventos($id);
        return $Eventos;
    }

    public function cadastrar($evento, $descricao, $data, $horario, $local, $maximodeparticipantes){
        $this->EventosModel->cadastrar($evento, $descricao, $data, $horario, $local, $maximodeparticipantes);
        return true;
    }
    
    public function editar($evento, $descricao, $data, $horario, $local, $maximodeparticipantes, $id){
        $this->EventosModel->editar($evento, $descricao, $data, $horario, $local, $maximodeparticipantes, $id);

    }

    public function deletar($id){
        $Eventos = $this->EventosModel->deletar($id);
        return $Eventos;
    }

}
