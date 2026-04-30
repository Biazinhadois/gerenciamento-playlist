<?php

require_once 'crud.php';

print '<table border=1>
<tr>
<th>ID</th>
<th>Título</th>
</tr>';

$livros = readALL($pdo, 'livros', 'preco < 50 and id <50');

// print_r($livros);

foreach ($livros as $livro) {
    echo "<tr><td>".$livro['id']."</td><td>".$livro['titulo']."</td></tr>";
    }

print"</table>";

$livro = read($pdo, 'livros', 'id= 675');
if ($livro) {
    echo '<p>O livro em questão é: '.$livro['titulo'].'</p>';
}