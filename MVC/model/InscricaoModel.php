<?php

class InscricaoModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM Inscricao');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarInscricao ($nome,$tipo){
        $sql = "INSERT INTO Inscricao (nome,tipo) VALUES (:nome, :tipo)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([
            ':nome'=> $nome,
            ':tipo'=> $tipo
            
        ]);
    }

    public function buscarInscricao($id){
        $stmt = $this->pdo->query("SELECT * FROM Inscricao WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarInscricao ($nome, $tipo, $id){
        $sql = "UPDATE Inscricao SET nome=?, tipo=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $tipo, $id]);
    }

    
    public function deletarInscricao ($id){
        $sql = "DELETE FROM Inscricao WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}

?>