<?php

    session_start();

    $arquivo = fopen('arquivo.txt', 'a');

    $titulo = str_repeat('#', '-', $_POST['titulo']);
    $categoria = str_repeat('#', '-', $_POST['categoria']);
    $descricao = str_repeat('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

?>