<?php

declare(strict_types=1);


class Hero extends Character implements IAttacker
{
    public function move(): string
    {
        return "The hero walks forward.";
    }

    public function attack(): string
    {
        return "The hero swings his sword.";
    }
}
