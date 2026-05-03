<?php

declare(strict_types=1);

interface IMachineActions
{
    public function turnOn(): string;
    public function turnOff(): string;
}
