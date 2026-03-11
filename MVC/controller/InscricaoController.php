<?php

require_once "C:/Turma1/xampp/htdocs/mvc/Model/PagamentoModel.php";

class PagamentoController{

    private $PagamentoModel;

    public function __construct($pdo){
        $this->PagamentoModel = new PagamentoModel( $pdo);
    }

    public function listarPagamento (){
        $pagamentos = $this->PagamentoModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/mvc/View/Pagamento/listarPagamento.php";
        return;
    }
    public function cadastrarPagamento ($nome, $tipo){
        return $this->PagamentoModel-> cadastrarPagamento($nome,$tipo);
    }

    public function editarPagamento ($nome, $tipo, $id){
        $this->PagamentoModel->editarPagamento($nome, $tipo, $id);
    }   

    public function buscarPagamento($id){
        return $this->PagamentoModel->buscarPagamento($id); 
    }

    public function deletarPagamento ($id){
        $pagamento = $this->PagamentoModel->deletarPagamento($id); 
        return $pagamento;

    }


}

?>