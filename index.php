<?php

$message = "Ação: " . implode(", ", array_slice($argv, 1));

echo $message;