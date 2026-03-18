<?php

require_once "C:/Turma1/xampp/htdocs/mvc/Model/ProdutoModel.php";

class EventoController{

    private $EventoModel;

    public function __construct($pdo){
        $this->EventoModel = new EventoModel( $pdo);
    }

    public function listarEvento (){
        $Eventos = $this->EventoModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/mvc/View/Evento/listarEvento.php";
        return;
    }
    public function cadastrarEvento ($id, $nome, $descricao, $horario, $local, $numero){
        return $this->EventoModel-> cadastrarEvento($id, $nome, $descricao, $horario, $local, $numero);
    }

    public function editarEvento ($nome, $descricao, $horario, $local, $numero, $id){
        $this->EventoModel->editarEvento( $nome, $descricao, $horario, $local, $numero, $id);
    }   

    public function buscarEvento($id){
        return $this->EventoModel->buscarEvento($id); 
    }

    public function deletarEvento ($id){
        $Evento = $this->EventoModel->deletarEvento($id); 
        return $Evento;

    }


}

?>