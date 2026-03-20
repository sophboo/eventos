<?php
class ParticipanteModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM participantes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function buscarParticipante($id){
        $stmt = $this->pdo->query("SELECT * FROM participantes WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $telefone, $email) {
        $sql = "INSERT INTO participantes (nome, telefone, email) VALUES (:nome, :telefone, :email)";
        
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':email' => $email
        ]);
    }

    public function editar($nome, $telefone, $email, $id) {
        $sql = "UPDATE participantes SET nome=?, telefone=?, email=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $telefone, $email, $id]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM participantes WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    
}