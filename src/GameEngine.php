<?php

    class GameEngine{
        public $wildPokemonList = [
            'Pikachu', 
            'Bulbassauro', 
            'Charmander',
            'Squirtle',
            'Ditto',
            'Pidgey',
            'Magikarp',
            'Lucario'
        ];

        private $contextEvents = [
            'WELCOME', 
            'JUST_EXPLORED', 
            'WILD_POKEMON_APPEARED',
            'NPC'
        ];

        public function welcomeEventDo($trainer){
            $app = "PokeAdventure 0.0.1";
            $time = date("H:i");
            

            echo "App: $app" . PHP_EOL . "Hora: $time" . PHP_EOL . "Seja bem vindo, $trainer." . PHP_EOL;
        }

        public function justExploredEventDo($trainer){
            showMessage("Ufa! Treinador $trainer, passamos por matinhos e nada aconteceu.");
        }

        public function wildPokemonAppearedEventDo($pokemonName){
            echo "Eita, prepare-se que o $pokemonName está bem á sua frente". PHP_EOL;
        }

        public function npcEventDo(){
            echo "Olá, gritou uma personagem de longe. Vamos conversar?". PHP_EOL;
        }

        public function runLoop($trainer, $pokemonName){
            $mensagem = [
                "Ufa! Treinador $trainer, passamos por matinhos e nada aconteceu.",
                "Eita, prepare-se que o $pokemonName está bem á sua frente",
                "Olá, gritou uma personagem de longe. Vamos conversar?"
            ];
        
            showMessage($mensagem[array_rand($mensagem)]);
        }
    }
?>