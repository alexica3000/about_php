<?php

abstract class Journey
{
    private array $thingsToDo = [];

    final public function takeTrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();

        $buyGift = $this->buyGift();

        if ($buyGift !== null)
        {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    abstract protected function enjoyVacation() : string;

    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight() : string
    {
        return 'Buy tickets for plane';
    }

    private function takePlane() : string
    {
        return 'We fly on plane';
    }

    public function getThingsToDo() : array
    {
        return $this->thingsToDo;
    }
}

class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return 'Eat, drink juice, sleep, make photo';
    }

    protected function buyGift() : string
    {
        return 'Buy a magnet';
    }
}

class BeachJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return 'Swim in the sea';
    }
}

echo '<pre>';

$journey = rand(0, 1) ? new BeachJourney() : new CityJourney();
$journey->takeTrip();

foreach ($journey->getThingsToDo() as $item)
{
    echo $item . PHP_EOL;
}

echo '</pre>';