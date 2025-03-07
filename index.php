<?php

require "./src/Utils.php";
$nomeAplicacao = "PokeAdventure 0.0.1";

$horario = date('H:i');

$nomeTreinador = isset($argv[1]) ? $argv[1] : 'Treinador desconhecido';

showMessage("Bem-vindo ao " . $nomeAplicacao . "!" . PHP_EOL);
showMessage("Hora atual: " . $horario . PHP_EOL);
showMessage("Saudações, " . $nomeTreinador . "!" . PHP_EOL);

function gameLoop($nomeTreinador, array $wildPokemonList) 
{
    $valor = 2;
    if($valor == 1) {
        showMessage("Ufa! Treinador " .$nomeTreinador. ", passamos por matinhos e nada aconteceu." . PHP_EOL); 
    }
    if($valor == 2) {
        showMessage("Eita, prepare-se um ". wildPokemonAppeared($wildPokemonList)." está bem á sua frente" . PHP_EOL);
    }
    if($valor == 3) {
        showMessage("Olá, gritou uma personagem de longe. Vamos conversar?" . PHP_EOL);
    }
}

$wildPokemonList = ['Pikachu', 'Bulbassaur', 'Charmander', 'Squirtle', 'Ditto', 'Pidgey', 'Magikarp', 'Lucario'];

gameLoop($nomeTreinador, $wildPokemonList);

function wildPokemonAppeared(array $wildPokemonList)
{
   $valorPokemon = random_int(0, 7);
   for($i = 0; $i < count($wildPokemonList); $i++){
       if($valorPokemon == $i){
           return $wildPokemonList[$i];
       }
   } 
}