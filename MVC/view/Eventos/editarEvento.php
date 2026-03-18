<?php

require_once "C:/Turma1/xampp/htdocs/MVC/DB/database.php";
require_once "C:/Turma1/xampp/htdocs/MVC/Controller/EventoController.php";

$EventoController = new EventoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $usuario = $EventoController->buscarEvento($id);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
</head>
<body>
    
<form method="post">

 <label for="nome">Nome: </label>
 <input type="text" name="nome" required><br><br>

 <label for="descricao">Descrição: </label>
 <input type="text" name="descricao" required><br><br>

 <label for="horario">Horario: </label>
 <input type="number" name="horario" required><br><br>

 <label for="local">Codígo de Barras: </label>
 <input type="number" name="local" required><br><br>

 <label for="numero">Preço: </label>
 <input type="number" name="numero" required><br><br>

 <input type="submit">

</form>

</body>
</html>

<?php
}else{
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){

   $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $numero = $_POST['numero'];
  
    $EventoController -> editarEvento($nome,$descricao,$quantidade,$local,$preco, $id);
    header('Location: ../../index.php');
}

?>