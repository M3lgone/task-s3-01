<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/PlayInstrument.php';
require_once __DIR__ . '/../src/Guitar.php';
require_once __DIR__ . '/../src/Drums.php';
require_once __DIR__ . '/../src/Piano.php';



$guitar = new Guitar();
$drums = new Drums();
$piano = new Piano();

echo $guitar->play() . PHP_EOL;
echo $drums->play() . PHP_EOL;
echo $piano->play() . PHP_EOL;
