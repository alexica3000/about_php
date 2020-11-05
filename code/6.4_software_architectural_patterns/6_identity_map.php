<?php

class IdentityMap
{
    private array $items = [];

    public function hasId($id)
    {
        return isset($this->items[$id]);
    }

    public function get($id)
    {
        return $this->items[$id];
    }

    public function set($id, $value)
    {
        $this->items[$id] = $value;

        return $this;
    }
}

class UserMapper
{
    private StorageAdapter $adapter;
    private IdentityMap $identityMap;

    public function __construct(StorageAdapter $adapter)
    {
        $this->adapter = $adapter;
        $this->identityMap = new IdentityMap();
    }

    public function findById(int $id)
    {
        if ($this->identityMap->hasId($id)) {
            return $this->identityMap->get($id);
        }

        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException('User with id ' . $id . ' not found');
        }

        $item = $this->mapRowToUser($result);
        $this->identityMap->set($id, $item);

        return $item;
    }

    public function mapRowToUser(array $row) : User
    {
        return User::fromState($row);
    }
}
