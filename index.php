<?php
    $app = "PokeAdventure 0.0.1";
    $time = date("H:i");

    $trainer = ($argc > 1) ? $argv[1] : "Ash";

    echo "Bem vindo ao programa $app." . PHP_EOL. "São exatamente $time." . PHP_EOL . "Seu treinador de hoje será $trainer" . PHP_EOL;  

?>