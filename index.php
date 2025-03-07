<?php

$message = "Ação: ";

for( $i = 1; $i < count($argv); $i++ ){
    if ($i == count($argv) - 1) {
        $message .= $argv[$i];
        break;
    }

    $message .= $argv[$i] . ", ";
}

print $message;