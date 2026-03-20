<?php

if (empty($eventos)) {
    echo "<p>Nenhum evento encontrado!</p>";
    echo "<a href='/eventos/MVC/view/Eventos/cadastrarEvento.php'>Cadastrar</a>";
    return;
}

echo "<a href='/eventos/MVC/view/Eventos/cadastrarEvento.php'>Cadastrar</a><br><br>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
<th>ID</th>
<th>Nome</th>
<th>Descrição</th>
<th>Horário</th>
<th>Local</th>
<th>Número</th>
<th>Data</th>
<th>Ações</th>
</tr>";

foreach ($eventos as $evento) {
    $id = $evento['id'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$evento['nome']}</td>";
    echo "<td>{$evento['descricao']}</td>";
    echo "<td>{$evento['horario']}</td>";
    echo "<td>{$evento['local']}</td>";
    echo "<td>{$evento['numero']}</td>";
    echo "<td>{$evento['data']}</td>";
    echo "<td>
        <a href='/eventos/MVC/view/Eventos/editarEvento.php?id={$id}'>Editar</a> |
        <a href='/eventos/MVC/view/Eventos/deletarEvento.php?id={$id}' 
        onclick=\"return confirm('Tem certeza que deseja excluir?')\">Deletar</a>
    </td>";
    echo "</tr>";
}

echo "</table>";
