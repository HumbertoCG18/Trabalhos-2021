<?php 

$nome = "Humberto";
$sobrenome = 'Corrêa';
$extra = 'Gomes';

$nomeCompleto = $nome.' '.sobrenome;

echo strtoupper($nomeCompleto).'<br>';
echo strtoupper($nomeCompleto).'<br>';
echo ucfirst($nomeCompleto).'<br>';
echo ucwords($nomeCompleto).'<br>';
echo str_word_count($nomeCompleto.$extra).'<br>';
echo strlen($nomeCompleto).'<br>';
?>