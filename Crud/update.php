<?php
require_once 'crud.php';

$idLivro = 675;

$dadosAtualizados = [
    'titulo' => 'Magia Negra for Dummies',
    'isbn' => '9781118008188',
    'autor' => 'Leticia',
    'preco' => '299.99',
    'situacao' => 'Disponível',
    'categoria' => 'Outros'
];

$linhasAfetadas = update($pdo, 'livros', $dadosAtualizados, 'id = '.$idLivro);

if ($linhasAfetadas > 0 ) {
    echo 'Livro atualizado com sucesso!!!';
} else {
    echo 'Não foi possivel atualizar o livro!!!';
}