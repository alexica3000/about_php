<?php

class House
{
    private $walls;
    private $floor;
    private $roof;
    private $garage;

    public function setWalls($walls)
    {
        $this->walls = $walls;
    }

    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    public function setRoof($roof)
    {
        $this->roof = $roof;
    }

    public function setGarage($garage)
    {
        $this->garage = $garage;
    }
}

class HouseBuilder
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function getHouse() : House
    {
        return $this->house;
    }

    public function buildRoof($roof) : HouseBuilder
    {
        $this->getHouse()->setRoof($roof);

        return $this;
    }

    public function buildFloor($floor) : HouseBuilder
    {
        $this->getHouse()->setFloor($floor);

        return $this;
    }

    public function buildWalls($walls) : HouseBuilder
    {
        $this->getHouse()->setWalls($walls);

        return $this;
    }

    public function buildGarage($garage) : HouseBuilder
    {
        $this->getHouse()->setGarage($garage);

        return $this;
    }
}

$house = (new HouseBuilder());
$house
    ->buildRoof('tile')
    ->buildWalls('wood')
    ->buildFloor('parquet')
    ->getHouse()
;
