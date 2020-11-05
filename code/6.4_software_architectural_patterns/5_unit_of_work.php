<?php

class UnitOfWork
{
    private array $news = [];
    private array $updates = [];
    private array $deletes = [];

    public function addNew($item)
    {
        $this->news[] = $item;

        return $this;
    }

    public function addUpdate($item)
    {
        $this->updates[] = $item;

        return $this;
    }

    public function addDelete($item)
    {
        $this->deletes[] = $item;

        return $this;
    }

    public function commit()
    {
        foreach ($this->news as $item)
        {
            echo 'Add ' . $item . PHP_EOL;
        }

        foreach ($this->updates as $item)
        {
            echo 'Update ' . $item . PHP_EOL;
        }

        foreach ($this->deletes as $item)
        {
            echo 'Delete ' . $item . PHP_EOL;
        }
    }
}

echo '<pre>';

$work = new UnitOfWork();
$work
    ->addNew('oil')
    ->addUpdate('sour cream')
    ->addUpdate('immunity')
    ->addDelete('disease')
    ->addNew('good mood')
;

$work->commit();

echo '</pre>';
