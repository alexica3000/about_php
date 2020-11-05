<?php

interface Observer
{
    public function update($subject);

}

abstract class Subject
{
    protected SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(Observer $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(Observer $observer)
    {
        $this->observers->detach($observer);
    }

    protected function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}

class User extends Subject
{
    private string $email;

    public function getEmail()
    {
        return $this->email;
    }

    public function changeEmail($email)
    {
        $this->email = $email;
        $this->notify();
    }
}

class UserEmailObserver implements Observer
{
    public function update($subject)
    {
        echo 'Data has been changed. Notification has been send to email ' . $subject->getEmail() . PHP_EOL;
    }
}

$user = new User();
$user->attach(new UserEmailObserver());
$user->changeEmail('test@test.com');
