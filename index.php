<?php

require "./src/Utils.php";
$nomeAplicacao = "PokeAdventure 0.0.1";

$horario = date('H:i');

$nomeTreinador = isset($argv[1]) ? $argv[1] : 'Treinador desconhecido';

showMessage("Bem-vindo ao " . $nomeAplicacao . "!" . PHP_EOL);
showMessage("Hora atual: " . $horario . PHP_EOL);
showMessage("Saudações, " . $nomeTreinador . "!" . PHP_EOL);

function gameLoop($nomeTreinador) 
{
    $valor = random_int(1, 3);
    if($valor == 1) {
        showMessage("Ufa! Treinador " .$nomeTreinador. ", passamos por matinhos e nada aconteceu." . PHP_EOL); 
    }
    if($valor == 2) {
        showMessage("Eita, prepare-se um Pokemon está bem á sua frente" . PHP_EOL);
    }
    if($valor == 3) {
        showMessage("Olá, gritou uma personagem de longe. Vamos conversar?" . PHP_EOL);
    }
}

gameLoop($nomeTreinador);