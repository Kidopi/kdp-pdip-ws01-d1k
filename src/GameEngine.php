<?php
    class GameEngine{
        
        public $wildPokemonList = ["Pikachu", "Bulbassauro","Ghast"];

        public $contextEvents = ['WELCOME', 'JUST_EXPLORED', 'WILD_POKEMON_APPEARED','NPC'];

        public function welcomeDo(){
            $appName = "PokeAdventure 0.0.1";
            $time = date("H:i");
            $trainerName = $argv[1] ?? 'treinador';

            showMessage("$appName".PHP_EOL.
            "Hora da execução: $time".PHP_EOL.
            "Bem-vindo, Treinador $trainerName!".PHP_EOL);
        }

        public function justExploredDo(){
            $trainerName = $argv[1] ?? 'treinador';
            showMessage("Ufa! Treinador $trainerName, passamos por matinhos e nada aconteceu.");
        }

        public function wildPokemonAppearedDo(){
            showMessage("Eita, prepare-se um Pokemon está bem á sua frente");
        }

        public function npcDo(){
            showMessage("Olá, gritou uma personagem de longe. Vamos conversar?");
        }

        public function runLoop(){

        }
    }