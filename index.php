
<?php
// ./src/Utils.php
require_once('src/Utils.php');
require_once('src/GameEngine.php');

# Novo jogo
$gameEngine = new GameEngine();

# Roda o loop do jogo
$gameEngine->runLoop();