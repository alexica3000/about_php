<?php

interface SocialNetworkAuth
{
    public function auth();
    public function getUserData();
}

class VkAuth implements SocialNetworkAuth
{
    public function auth()
    {
        // TODO: Implement auth() method.
    }

    public function getUserData()
    {
        // TODO: Implement getUserData() method.
    }
}

class InstagramOAuth
{
    public function authById($id)
    {

    }

    public function getUserId()
    {

    }

    public function getPhotos()
    {

    }

    public function getUserInfo()
    {

    }
}

class InstagramAdapter implements SocialNetworkAuth
{
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new InstagramOAuth();
    }

    public function auth()
    {
        $this->adaptee->authById($this->adaptee->getUserId());
    }

    public function getUserData()
    {
        $this->adaptee->getUserInfo();
    }
}

function auth(SocialNetworkAuth $provider)
{
    $provider->auth();
}

$instagram = new InstagramAdapter();
auth($instagram);

$vk = new VkAuth();
auth($vk);
