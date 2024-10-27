<?php

if(! auth()){
    header('Location: /');
    exit();
}

$livros = Livro::meusLivros(auth()->id);

view('meus-livros', compact('livros'));