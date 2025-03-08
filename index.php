<?php
require 'src/Utils.php';
require 'src/GameEngine.php';

$game = new GameEngine();

$trainer = ($argc > 1)? $argv[1]: "Ash";


$pokemonName = $game->wildPokemonList[array_rand($game->wildPokemonList)];


$game->runLoop($trainer,$pokemonName);

?>
