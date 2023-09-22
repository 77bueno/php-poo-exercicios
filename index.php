<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 1</title>
<style>
    body {
        background: rgb(44,161,185);
        background: linear-gradient(274deg, rgba(44,161,185,1) 5%, rgba(28,183,214,1) 55%, rgba(0,212,255,1) 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 18px;
    }
    section { 
        position: relative;
        top: 80px;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        padding: 15px;
        margin: auto;
        width: 50%;
    }
</style>
</head>
<body>
<section>
    <h1>Exercício 01 - Abstração e Encapsulamento</h1>
    <h2>Criando uma classe Livro, atribuindo propriedades e seus métodos.</h2>
    <p>Veja abaixo os dados do livro.</p>

<?php
require_once "src/Livro.php";

$livro1 = new Livro;

$livro1->setTitulo("Harry Potter - E o cálice de fogo");
$livro1->setAutor("J. K. Rowling");
$livro1->setPaginas(287);
?>

<p><b>Titulo do Livro:</b> <?=$livro1->getTitulo()?> </p>
<p><b>Autor do Livro:</b> <?=$livro1->getAutor()?> </p>
<p><b>Quantidade de páginas do livro:</b> <?=$livro1->getPaginas()?> </p>
</section>
</body>
</html>