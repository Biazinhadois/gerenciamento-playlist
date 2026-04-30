<?php

require_once './crud.php';

$musicas = readALL($pdo, 'musicas', 'id < 10');


foreach ($musicas as $musicas) {
    echo "<tr><td>".$musicas['id']."</td><td>".$musicas['nome']."</td></tr>";
    }

print"</table>";

$musicas = read($pdo, 'musicas', 'id= 1');
if ($musica) {
    echo '<p>O livro em questão é: '.$musica['nome'].'</p>';
}