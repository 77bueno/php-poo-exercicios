<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 01 - Abstração e Encapsulamento</h1>
    <hr>
    <p>Veja abaixo os dados.</p>

<?php
require_once "src/Livro.php";

$livro1 = new Livro;

$livro1->setTitulo("Harry Potter - E o cálice de fogo");
$livro1->setAutor("J. K. Rowling");
$livro1->setPaginas(287);
?>

<p>Titulo do Livro: <?=$livro1->getTitulo()?> </p>
<p>Autor do Livro: <?=$livro1->getAutor()?> </p>
<p>Quantidade de páginas do livro: <?=$livro1->getPaginas()?> </p>
</body>
</html>