<?php
require_once "src/Tecnico.php";
require_once "src/Programacao.php";
require_once "src/Didatico.php";

$livroTecnico = new Tecnico;

$livroTecnico->setTitulo("Análise e Desenvolvimento de Sistemas");
$livroTecnico->setAutor("Klaibert");
$livroTecnico->setPaginas(500);
$livroTecnico->setFormato(["fisico"]);

$livroProgramacao = new Programacao;

$livroProgramacao->setTitulo("PHP 8 - TS");
$livroProgramacao->setAutor("Tiago Santos");
$livroProgramacao->setPaginas(2000);
$livroProgramacao->setArea("PHP");

$livroDidatico = new Didatico;

$livroDidatico->setTitulo("PS Brasil");
$livroDidatico->setAutor("Neide");
$livroDidatico->setPaginas(250);
$livroDidatico->setDisciplina("Portugues");
$livroDidatico->setNivel(["médio"]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 1</title>
<style>
    body {
        background-color: lightsalmon;
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
        width: 30%;
        height: 280px;
    }

    section:hover {
        width: 32%;
        height: 282px;
        background-color: lightgray;
    }

    div {
        display: flex;
    }

    .cor {
        text-align: center;
        background-color: white;
        width: 40%;
        padding: 20px;
        margin: auto;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    }
    span {
        font-size: 26px;
    }

</style>
</head>
<body>
    <h1 class="cor">
        Exercício 02 - Abstração e Encapsulamento
        <span>Implementação, Herança e Subclasses</span>
    </h1>
    
<div>
    <section>
    
    <h2>Dados (Técnico)</h2>
    <p><b>Nome:</b> <?=$livroTecnico->getTitulo()?></p>
    <p><b>Autor:</b> <?=$livroTecnico->getAutor()?></p>
    <p><b>Páginas:</b> <?=$livroTecnico->getPaginas()?></p>
    <p><b>Formato do Livro:</b> <?=$livroTecnico->getFormato()?></p>
    </section>

    <section>
    <h2>Dados (Programação)</h2>

    <p><b>Nome:</b> <?=$livroProgramacao->getTitulo()?></p>
    <p><b>Autor:</b> <?=$livroProgramacao->getAutor()?></p>
    <p><b>Páginas:</b> <?=$livroProgramacao->getPaginas()?></p>
    <p><b>Formato do Livro:</b> <?=$livroProgramacao->getArea()?></p>
    </section>

    <section>
    <h2>Dados (Didático)</h2>

    <p><b>Nome:</b> <?=$livroDidatico->getTitulo()?></p>
    <p><b>Autor:</b> <?=$livroDidatico->getAutor()?></p>
    <p><b>Páginas:</b> <?=$livroDidatico->getPaginas()?></p>
    <p><b>Disciplina do Livro:</b> <?=$livroDidatico->getDisciplina()?></p>
    <p><b>Nível do Livro:</b> <?=$livroDidatico->getNivel()?></p>
    </section>
</div>
</body>
</html>