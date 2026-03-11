<?php

class ProdutoModel{

    private  $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function buscarTodos(){
        $stmt = $this->pdo->query('SELECT * FROM produto');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarProduto ($nome,$descricao,$quantidade,$codigo_barra,$preco){
        $sql = "INSERT INTO produto (nome,descricao, quantidade, codigo_barra, preco) VALUES (:nome, :descricao, :quantidade, :codigo_barra, :preco)";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([

            ':nome'=> $nome,
            ':descricao'=> $descricao,
            ':quantidade'=> $quantidade,
            ':codigo_barra'=> $codigo_barra,
            ':preco'=> $preco,
            
        ]);
    }

    public function buscarProduto($id){
        $stmt = $this->pdo->query("SELECT * FROM produto WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarProduto ($nome, $descricao, $quantidade, $codigo_barra, $preco, $id){
        $sql = "UPDATE produto SET nome=?, descricao=?, quantidade=?,  codigo_barra=?, preco=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $descricao, $quantidade, $codigo_barra, $preco, $id]);
    }

    
    public function deletarProduto ($id){
        $sql = "DELETE FROM produto WHERE id = ?";
        $stmt = $this ->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}

?>