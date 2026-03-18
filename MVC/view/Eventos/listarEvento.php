<?php

if (empty($eventos)) {
    echo "<p>Nenhum usuário encontrado!</p>";
    echo "<a href='View/Eventos/cadastrar.php'>Cadastrar</a>";
    return;
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><td><a href='View/Eventos
/cadastrar.php'>Cadastrar</a></td></tr>";
echo "<tr><th>ID</th><th>evento</th><th>descricao</th><th>data</th><th>horario</th><th>local</th><th>maximodeparticipantes</th></tr>";

foreach ($eventos as $evento) {
    $id = $evento['id'];
    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$evento['evento']}</td>";
    echo "<td>{$evento['descricao']}</td>";
    echo "<td>{$evento['data']}</td>";
    echo "<td>{$evento['horario']}</td>";
    echo "<td>{$evento['local']}</td>";
    echo "<td>{$evento['maximodeparticipantes']}</td>";
    echo "<td>
                <a href='View/evento/editar.php?id={$id}'>Editar</a> |
                <a href='View/evento/deletar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Deletar</a>
            </td>";
    echo "</tr>";
}
echo "</table>";
