<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/IMachineActions.php';
require_once __DIR__ . '/../src/IHeat.php';
require_once __DIR__ . '/../src/IWash.php';
require_once __DIR__ . '/../src/ElectricHeater.php';
require_once __DIR__ . '/../src/WashingMachine.php';



$heater = new ElectricHeater();
$washer = new WashingMachine();

echo $heater->turnOn() . PHP_EOL;
echo $heater->heat() . PHP_EOL;
echo $heater->turnOff() . PHP_EOL;


echo $washer->turnOn() . PHP_EOL;
echo $washer->wash() . PHP_EOL;
echo $washer->turnOff() . PHP_EOL;
