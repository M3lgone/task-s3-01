<?php

declare(strict_types=1);


class Drums implements PlayInstrument
{
    public function play(): string
    {
        return "🥁 Beating the drums";
    }
}
