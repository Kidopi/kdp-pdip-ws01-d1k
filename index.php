<?php
    echo "Hello World!".PHP_EOL;

    // Take all elements except the first one (the script name)
    $entrada = array_slice($argv, 1);
    
    echo "Entrada: ".print_r($entrada, true).PHP_EOL;
?>

require'src/Utils.php';