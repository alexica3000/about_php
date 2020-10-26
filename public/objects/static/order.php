<?php

class Order
{
    public $status;

    const STATUS_CREATED = 'created';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_DONE = 'done';

    protected static $statuses = [
        self::STATUS_CREATED,
        self::STATUS_CANCELLED,
        self::STATUS_DONE
    ];

    public function isDone()
    {
        return $this->getStatus() === self::STATUS_DONE;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public static function getDoneStatus()
    {
        return self::STATUS_DONE;
    }

    public static function getStatuses()
    {
        return self::$statuses;
    }
}
