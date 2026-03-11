<?php

require_once "C:/Turma1/xampp/htdocs/mvc/Model/UsuarioModel.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo){
        $this->usuarioModel = new UsuarioModel( $pdo);
    }

    public function listar (){
        $usuarios = $this->usuarioModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/mvc/View/Usuario/listar.php";
        return;
    }

    public function cadastrar ($nome, $email, $senha){
        return $this->usuarioModel-> cadastrar($nome, $email, $senha);
    }

    public function editar ($nome, $email, $senha, $id){
        $this->usuarioModel->editar($nome, $email, $senha, $id);
    }   

    public function buscarUsuario($id){
        return $this->usuarioModel->buscarUsuario($id); 
    }

    public function deletar ($id){
        $usuario = $this->usuarioModel->deletar($id); 
        return $usuario;

    }

}

?>