<?php

declare(strict_types=1);

class Event
{
    private string $category;
    private string $date;

    public function __construct(
        string $category,
        string $date
    ) {
        $this->category = $category;
        $this->date = $date;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
