<?php

declare(strict_types=1);

class WashingMachine implements IMachineActions, IWash
{
    public function turnOn(): string
    {
        return "Washing machine on";
    }

    public function turnOff(): string
    {
        return "Washing machine off";
    }

    public function wash(): string
    {
        return "Washing clothes";
    }
}
