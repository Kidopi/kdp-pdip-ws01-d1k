
<?php
// ./src/Utils.php
require('src/Utils.php');

    $appName = "PokeAdventure 0.0.1";
    $time = date("H:i");
    $trainerName = $argv[1] ?? 'treinador';

    showMessage("$appName".PHP_EOL.
    "Hora da execução: $time".PHP_EOL.
    "Bem-vindo, Treinador $trainerName!".PHP_EOL);

    function gameLoop($trainerName): void {
        $mensagens = ["Ufa! Treinador $trainerName, passamos por matinhos e nada aconteceu.",
        "Eita, prepare-se um Pokemon está bem á sua frente",
        "Olá, gritou uma personagem de longe. Vamos conversar?"];

        $randomIndex = rand(0, 2);
        showMessage($mensagens[$randomIndex]);
    }

    gameLoop($trainerName);

    