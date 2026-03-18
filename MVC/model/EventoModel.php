<?php
// require_once "C:/Turma2/xampp/htdocs/Eventos/DB/Database.php";
class EventosModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM gerenciamento");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function buscarEventos($id){
        $stmt = $this->pdo->query("SELECT * FROM gerenciamento WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($evento, $descricao, $data, $horario, $local, $maximodeparticipantes) {
        $sql = "INSERT INTO gerenciamento (evento, descricao, data, horario, local, maximodeparticipantes) VALUES (:evento, :descricao,:data,:horario, :local, :maximodeparticipantes)";
       
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':evento' => $evento,
            ':descricao' => $descricao,
            ':data' => $data,
            ':horario' => $horario,
            ':local' => $local,
            ':maximodeparticipantes' => $maximodeparticipantes

        ]);
    }
    public function editar($id ,$evento, $descricao, $data, $horario, $local, $maximodeparticipantes) {
        $sql = "UPDATE gerenciamento SET evento=?, descricao=?, data=? , horario=?, local=?, maximodeparticipantes=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([ $id, $evento, $descricao, $data, $horario, $local, $maximodeparticipantes]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM gerenciamento WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    
}