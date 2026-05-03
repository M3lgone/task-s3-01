<?php

declare(strict_types=1);


class Guitar implements PlayInstrument
{
    public function play(): string
    {
        return "🎸 Strumming the guitar";
    }
}
