<?php
 require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
class EventoModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM evento");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function buscarEventos($id){
        $stmt = $this->pdo->query("SELECT * FROM evento WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrarEvento( $nome, $descricao, $horario, $local, $numero, $data) {
        $sql = "INSERT INTO evento ( nome, descricao, horario, local, numero, data) VALUES ( :nome, :descricao, :horario, :local, :numero, :data)";
       
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':descricao' => $descricao,
            ':horario' => $horario,
            ':local' => $local,
            ':numero' => $numero,
            ':data' => $data

        ]);
    }
   public function editar($id, $nome, $descricao, $horario, $local, $numero, $data) {
    $sql = "UPDATE evento SET nome=?, descricao=?, horario=?, local=?, numero=?, data=? WHERE id=?";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([$nome, $descricao, $horario, $local, $numero, $data, $id]);
}

    public function deletarEvento($id) {
        $sql = "DELETE FROM evento WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    
}