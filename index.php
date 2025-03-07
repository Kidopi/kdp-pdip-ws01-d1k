<?php
    if($argc > 2){
        echo "Acao: ";
        for ($i = 0; $i < $argc; $i++) {
            echo "{$argv[$i]} ";
        }
        echo PHP_EOL;
    }

?>