<?php
require_once './crud.php';

$idMusicas = 6;

$dadosAtualizados = [
   'nome' => 'Testssae',
    'artista' => 'Johndsad Doe',
    'duracao' => '00:55:55',
    'genero' => 'Pop/Rocdsask',
];

$linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados, 'id = '.$idMusicas);

if ($linhasAfetadas > 0 ) {
    echo 'Musica atualizado com sucesso!!!';
} else {
    echo 'Não foi possivel atualizar a musica!!!';
}