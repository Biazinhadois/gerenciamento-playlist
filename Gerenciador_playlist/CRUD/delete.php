<?php 
require_once 'crud.php';

$idLivro = 675;

$deleted = delete($pdo, 'livros', 'id = '.$idLivro);

if ($delete) {
    echo 'Livro excluido com sucesso';
} else {
    echo 'Não foi possivel excluir o livro';
}