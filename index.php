
<?php
// ./src/Utils.php
require('src/Utils.php');

    $appName = "PokeAdventure 0.0.1";
    $time = date("H:i");
    $trainerName = $argv[1];

    showMessage("$appName".PHP_EOL.
    "Hora da execução: $time".PHP_EOL.
    "Bem-vindo, Treinador $trainerName!".PHP_EOL);

    $mensagens = ["Ufa! Treinador ${trainerName}, passamos por matinhos e nada aconteceu.",
"Eita, prepare-se um Pokemon está bem á sua frente",
"Olá, gritou uma personagem de longe. Vamos conversar?"];