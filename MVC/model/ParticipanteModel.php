<?php
class ParticipantesModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM participantes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function buscarParticipantes($id){
        $stmt = $this->pdo->query("SELECT * FROM participantes WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $email, $telefone) {
        $sql = "INSERT INTO participantes  (nome, email, telefone)
        VALUES (:nome, :email, :telefone)"; ;
        
       
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':telefone' => $telefone

        ]);
    }
    public function editar($nome, $email, $telefone, $id) {
        $sql = "UPDATE participantes SET nome=?, email=?, telefone=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([ $id, $nome, $email, $telefone]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM participantes WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    
}