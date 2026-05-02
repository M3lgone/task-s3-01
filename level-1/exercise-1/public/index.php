<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Athlete.php';
require_once __DIR__ . '/../src/Event.php';
require_once __DIR__ . '/../src/Medal.php';
require_once __DIR__ . '/../src/Result.php';
require_once __DIR__ . '/../src/OlympicGames.php';


$bolt = new Athlete('Usain Bolt', 'Jamaica');
$phelps = new Athlete('Michael Phelps', 'USA');

$sprint = new Event('100m Sprint', '2024-08-01');
$swimming = new Event('Swimming', '2024-08-02');

$resultBolt = new Result($bolt, $sprint, Medal::GOLD);
$resultPhelps = new Result($phelps, $swimming, Medal::GOLD);

$olympics = new OlympicGames();

$olympics->addResult($resultBolt);
$olympics->addResult($resultPhelps);

$olympics->showResults();
