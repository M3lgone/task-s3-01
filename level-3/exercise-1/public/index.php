<?php

declare(strict_types=1);

use Dom\CharacterData;

require_once __DIR__ . '/../src/Character.php';
require_once __DIR__ . '/../src/IAttacker.php';
require_once __DIR__ . '/../src/Ghost.php';
require_once __DIR__ . '/../src/Hero.php';

$characterPlayerHero = new Hero();
$characterEnemyGhost = new Ghost();


echo $characterPlayerHero->move() . PHP_EOL;
echo $characterPlayerHero->attack() . PHP_EOL;

echo $characterEnemyGhost->move() . PHP_EOL;
// echo $characterEnemyGhost->attack() . PHP_EOL;
