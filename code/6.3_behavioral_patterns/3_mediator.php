<?php

interface MediatorInterface
{
    public function makeRequest();
    public function sendResponse($content);
    public function loadData();
}

abstract class Collegue
{
    protected MediatorInterface $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}

class Client extends Collegue
{
    public function output($content)
    {
        echo $content . PHP_EOL;
    }

    public function request()
    {
        $this->mediator->makeRequest();
    }
}

class Server extends Collegue
{
    public function process()
    {
        $data = $this->mediator->loadData();
        $this->mediator->sendResponse('Hello ' . $data);
    }
}

class DataBase extends Collegue
{
    public function getData()
    {
        return 'World';
    }
}

class Mediator implements MediatorInterface
{
    private DataBase $storage;
    private Client $client;
    private Server $server;

    public function __construct(DataBase $storage, Client $client, Server $server)
    {
        $this->storage = $storage;
        $this->client = $client;
        $this->server = $server;

        $this->storage->setMediator($this);
        $this->client->setMediator($this);
        $this->server->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function loadData()
    {
        return $this->storage->getData();
    }
}

$client = new Client();
new Mediator(new DataBase(), $client, new Server);

$client->request();
