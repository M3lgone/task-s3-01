<?php

declare(strict_types=1);


class Piano implements PlayInstrument
{
    public function play(): string
    {
        return "🎹 Playing the piano";
    }
}
