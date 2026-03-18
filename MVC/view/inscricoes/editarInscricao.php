<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pagamento</title>
</head>
<body>
    
 <form method="post">

 <label for="nome">Nome: </label>
 <input type="text" name="nome" required><br><br>

 <label for="tipo">tipo: </label>
 <input type="text" name="tipo" required><br><br>

 <input type="submit">

 </form>

</body>
</html>

<?php

require_once "C:/Turma1/xampp/htdocs/mvc/DB/Database.php";
require_once "C:/Turma1/xampp/htdocs/mvc/Controller/PagamentoController.php";

$PagamentoController = new PagamentoController ($pdo);


if(isset($_GET['id'])){

  $id = $_GET['id'];
  $usuario = $PagamentoController->buscarPagamento($id);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
  
    $PagamentoController -> editarPagamento($nome,$tipo, $id);
    header('Location: ../../index.php');
  
  }


?>