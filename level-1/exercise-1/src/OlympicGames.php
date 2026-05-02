<?php

declare(strict_types=1);

class OlympicGames
{
    private array $results = [];

    public function addResult(Result $result): void
    {
        $this->results[] = $result;
    }

    public function showResults(): void
    {
        echo "Olympic Games Results:\n";
        foreach ($this->results as $result) {

            $category = $result->getEvent()->getCategory();

            $athleteName = $result->getAthlete()->getName();

            $country = $result->getAthlete()->getCountry();

            $medal = $result->getMedal()->value;

            echo "Event: {$category}\n";

            echo "- {$athleteName} from {$country} won {$medal}\n";
        }

    }

}
