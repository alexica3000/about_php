<?php

trait SendMail
{
    public function sendMail($email, $text)
    {
        echo 'Mail is send to ' . $email . PHP_EOL;
    }
}

trait Notification
{
    use SendMail;

    protected function needSendEmail()
    {
        return true;
    }

    public function notify()
    {
        if ($this->needSendEmail())
        {
            $this->sendMail($this->email, 'text');
        }
    }

    public function toLog()
    {
        echo 'Log about send email.';
    }
}

interface Notifiable
{
    public function notify();
}

class Person implements Notifiable
{
    use Notification;
    protected string $email;

    public function __construct($email)
    {
        $this->email = $email;
    }
}

class Cat implements Notifiable
{
    use Notification;

    protected function needSendEmail()
    {
        return false;
    }
}

$person = new Person('person@test.com');
$cat = new Cat();

$person->notify();
$cat->notify();
