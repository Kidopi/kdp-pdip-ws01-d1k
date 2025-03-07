<?php
require 'src/Utils.php';

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

function gameLoop($nomeTreinador, $nomePokemon){

    $mensagem = ["Ufa! Treinador $nomeTreinador, passamos por matinhos e nada aconteceu.",
    "Eita, prepare-se que o $nomePokemon está bem á sua frente",
    "Olá, gritou uma personagem de longe. Vamos conversar?"];

    echo $mensagem[array_rand($mensagem)] . PHP_EOL;
}

$nomeTreinador = "Pedro";
$nomePokemon = wildPokemonAppeared($wildPokemonList);

gameLoop($nomeTreinador, $nomePokemon);
