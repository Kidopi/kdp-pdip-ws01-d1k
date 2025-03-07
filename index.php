<?php

$nomeAplicacao = "PokeAdventure 0.0.1";

$horario = date('H:i');

$nomeTreinador = isset($argv[1]) ? $argv[1] : 'Treinador desconhecido';

$message = "Bem-vindo ao " . $nomeAplicacao . "!" . PHP_EOL;
$message .= "Hora atual: " . $horario . PHP_EOL;
$message .= "Saudações, " . $nomeTreinador . "!" . PHP_EOL;

echo $message;