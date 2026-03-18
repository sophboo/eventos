<?php

require_once "C:/Turma1/xampp/htdocs/mvc/Model/ParticipanteModel.php";

class ParticipanteController {
    private $ParticipanteModel;

    public function __construct($pdo){
        $this->ParticipanteModel = new ParticipanteModel( $pdo);
    }

    public function listar (){
        $Participantes = $this->ParticipanteModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/mvc/View/Participante/listar.php";
        return;
    }

    public function cadastrarParticipante ($nome, $telefone, $email, $senha){
        return $this->ParticipanteModel-> cadastrarParticipante($nome, $telefone, $email, $senha);
    }

    public function editarParticipante ($nome, $telefone, $email, $senha, $id){
        $this->ParticipanteModel->editarParticipante($nome, $telefone, $email, $senha, $id);
    }   

    public function buscarParticipante($id){
        return $this->ParticipanteModel->buscarParticipante($id); 
    }

    public function deletar ($id){
        $Participante = $this->ParticipanteModel->deletarParticipante($id); 
        return $Participante;

    }

}

?>