<?php
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$idade = $_GET["idade"];
$matricula = $_GET["matricula"];

$file = fopen("../tabela.csv", "a");
fwrite($file, "$nome,$sobrenome,$idade,$matricula\n");

?>

<h2>Dados Inseridos</h2>

<p>Nome: <?= $nome ?></p>
<p>Sobrenome: <?= $sobrenome ?></p>
<p>Idade: <?= $idade ?></p>
<p>Matricula: <?= $matricula ?></p>

<a href="Lista.php"> Voltar </a>