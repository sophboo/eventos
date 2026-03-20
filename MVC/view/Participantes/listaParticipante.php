<?php

if (empty($participantes)) {
    echo "<p>Nenhum usuário encontrado!</p>";
    echo "<a href='/eventos/MVC/view/Participantes/cadastrarParticipante.php'>Cadastrar</a>";
    return;
}

echo "<a href='/eventos/MVC/view/Participantes/cadastrarParticipante.php'>Cadastrar</a><br><br>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
<th>ID</th>
<th>Nome</th>
<th>Telefone</th>
<th>Email</th>
<th>Ações</th>
</tr>";

foreach ($participantes as $p) {
    $id = $p['id'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$p['nome']}</td>";
    echo "<td>{$p['telefone']}</td>";
    echo "<td>{$p['email']}</td>";
    echo "<td>
        <a href='/eventos/MVC/view/Participantes/editarParticipante.php?id={$id}'>Editar</a> |
        <a href='/eventos/MVC/view/Participantes/deletarParticipante.php?id={$id}' 
        onclick=\"return confirm('Tem certeza que deseja excluir?')\">Deletar</a>
    </td>";
    echo "</tr>";
}

echo "</table>";