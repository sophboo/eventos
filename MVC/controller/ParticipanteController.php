<?php
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/model/ParticipanteModel.php";

class ParticipanteController {
    private $ParticipanteModel;
   
    public function __construct($pdo) {
        $this->ParticipanteModel = new ParticipanteModel($pdo);
    }

    public function listar() {
        $participantes = $this->ParticipanteModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/eventos/MVC/view/Participantes/listaParticipante.php";
    }

    public function buscarParticipante($id){
        return $this->ParticipanteModel->buscarParticipante($id);
    }

    public function cadastrar($nome, $telefone, $email){
        return $this->ParticipanteModel->cadastrar($nome, $telefone, $email);
    }
    
    public function editar($nome, $telefone, $email, $id){
        return $this->ParticipanteModel->editar($nome, $telefone, $email, $id);
    }

    public function deletar($id){
        return $this->ParticipanteModel->deletar($id);
    }
}