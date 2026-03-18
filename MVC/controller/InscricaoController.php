<?php

require_once "C:/Turma1/xampp/htdocs/mvc/Model/InscricaoModel.php";

class InscricaoController{

    private $InscricaoModel;

    public function __construct($pdo){
        $this->InscricaoModel = new InscricaoModel( $pdo);
    }

    public function listarInscricao (){
        $Inscricaos = $this->InscricaoModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/mvc/view/Inscricao/listarInscricao.php";
        return;
    }
    public function cadastrarInscricao ($nome, $tipo){
        return $this->InscricaoModel-> cadastrarInscricao($nome,$tipo);
    }

    public function editarInscricao ($nome, $tipo, $id){
        $this->InscricaoModel->editarInscricao($nome, $tipo, $id);
    }   

    public function buscarInscricao($id){
        return $this->InscricaoModel->buscarInscricao($id); 
    }

    public function deletarInscricao ($id){
        $Inscricao = $this->InscricaoModel->deletarInscricao($id); 
        return $Inscricao;

    }


}

?>