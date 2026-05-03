<?php

declare(strict_types=1);

class ElectricHeater implements IMachineActions, IHeat
{
    public function turnOn(): string
    {
        return "Heater on";
    }

    public function turnOff(): string
    {
        return "Heater off";
    }

    public function heat(): string
    {
        return "Heating the room";
    }
}
