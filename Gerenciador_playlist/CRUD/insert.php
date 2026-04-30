<?php
require_once './crud.php';

$novaMusica = [
    'nome' => 'Teste',
    'artista' => 'John Doe',
    'duracao' => '00:55:55',
    'genero' => 'Pop/Rock',
];

$idMusicaNova = create($pdo, 'musicas', $novaMusica);
echo 'nova musica inserido com ID: '.$idMusicaNova;