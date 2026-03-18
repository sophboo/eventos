<?php

class EventoModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM Evento');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarEvento ($nome,$descricao,$horario,$local,$numero){
        $sql = "INSERT INTO Evento (nome,descricao, horario, local, numero) VALUES (:nome, :descricao, :horario, :local, :numero)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([

            ':nome'=> $nome,
            ':descricao'=> $descricao,
            ':horario'=> $horario,
            ':local'=> $local,
            ':numero'=> $numero,
            
        ]);
    }

    public function buscarEvento($id){
        $stmt = $this->pdo->query("SELECT * FROM Evento WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarEvento ($nome, $descricao, $horario, $local, $numero, $id){
        $sql = "UPDATE Evento SET nome=?, descricao=?, horario=?,  local=?, numero=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $descricao, $horario, $local, $numero, $id]);
    }

    
    public function deletarEvento ($id){
        $sql = "DELETE FROM Evento WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}

?>