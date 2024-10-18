<?php

require 'dados.php';
$id = $_REQUEST['id'];
$fill = array_filter($livros, fn($l) => $l['id'] == $id);
$livro = array_pop($fill);

view('livro', [
    'livro' => $livro
]);