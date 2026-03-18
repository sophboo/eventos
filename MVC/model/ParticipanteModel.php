<?php

class UsuarioModel {
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar ($nome, $telefone, $email, $senha){
        $sql = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:nome, :telefone, :email, :senha)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([
            ':nome'=> $nome,
            ':telefone'=> $telefone,
            ':email'=> $email,
            ':senha'=> $senha
        ]);
    }

    public function buscarUsuario($id){
        $stmt = $this->pdo->query("SELECT * FROM usuarios WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editar ($nome, $telefone, $email, $senha){
        $sql = "UPDATE usuarios SET nome=?, telefone=?, email=?, senha=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return$stmt->execute([$nome, $telefone, $email, $senha]);
    }

    
    public function deletar ($id){
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    
}

?>