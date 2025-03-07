<?php
require 'src/Utils.php';
showMessage('hello world!');

function gameLoop($nomeTreinador){
    $mensagem = ["Ufa! Treinador $nomeTreinador, passamos por matinhos e nada aconteceu.",
     "Eita, prepare-se um Pokemon está bem á sua frente",
      "Olá, gritou uma personagem de longe. Vamos conversar?"];

    echo $mensagem[array_rand($mensagem)] . PHP_EOL;
}

gameLoop('Pedro');


// #9 ..revelar qual a especie de monstro que apareceu
$wildPokemonList = [
    'Pikachu', 
    'Bulbassauro', 
    'Charmander',
    'Squirtle',
    'Ditto',
    'Pidgey',
    'Magikarp',
    'Lucario'
];

function wildPokemonAppeared($wildPokemonList){
    return $wildPokemonList[array_rand($wildPokemonList)];
}

echo wildPokemonAppeared($wildPokemonList) . PHP_EOL;