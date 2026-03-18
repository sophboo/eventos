<?php
require_once "C:/Turma2/xampp/htdocs/Eventos/Model/ParticipantesModel.php";
class ParticipantesController {
    private $ParticipantesModel;
   
    public function __construct($pdo) {
        $this->ParticipantesModel = new ParticipantesModel($pdo);

    }
    public function listar() {
        $Participantes = $this->ParticipantesModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/Eventos/View/Participantes/listar.php";
    }

    public function buscarParticipantes($id){
        $Participantes = $this->ParticipantesModel->buscarParticipantes($id);
        return $Participantes;
    }

    public function cadastrar($nome, $email, $telefone){
        $this->ParticipantesModel->cadastrar($nome , $email, $telefone);
        return true;
    }
    
    public function editar($nome, $email, $telefone, $id){
        $this->ParticipantesModel->editar( $nome, $email, $telefone,$id);

    }

    public function deletar($id){
        $Participantes = $this->ParticipantesModel->deletar($id);
        return $Participantes;
    }

}
