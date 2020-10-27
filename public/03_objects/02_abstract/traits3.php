<?php

trait Logger
{
    public function toLog()
    {
        echo 'Logger - to log.' . PHP_EOL;
    }
}

trait Notification
{
    public function toLog()
    {
        echo 'Log about send notification.' . PHP_EOL;
    }
}

class Subject
{
    use Notification {
        Notification::toLog as notificationToLog;
    }
    use Logger {
        Logger::toLog insteadof Notification;
    }
}

$subject = new Subject();
$subject->toLog();
$subject->notificationToLog();
