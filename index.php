<?php

require "./src/Utils.php";
$nomeAplicacao = "PokeAdventure 0.0.1";

$horario = date('H:i');

$nomeTreinador = isset($argv[1]) ? $argv[1] : 'Treinador desconhecido';

showMessage("Bem-vindo ao " . $nomeAplicacao . "!" . PHP_EOL);
showMessage("Hora atual: " . $horario . PHP_EOL);
showMessage("Saudações, " . $nomeTreinador . "!" . PHP_EOL);