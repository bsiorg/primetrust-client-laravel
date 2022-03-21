<?php

namespace BsiOrg\PrimeTrust\Api;

trait Accounts
{
    public function all()
    {
        return 1;
    }

    public function get()
    {
        return 1;
    }

    public function first()
    {
        return 1;
    }

    public function find(string $accountId)
    {
        return $this;
    }

    public function create(array $attributes)
    {
        return $this;
    }

    public function update(array $attributes)
    {
        return $this;
    }

    public function where(string $key, string $operator, string $value)
    {
        return $this;
    }

    public function orderBy(array $sort)
    {
        return $this;
    }

    public function include(array $include)
    {
        return $this;
    }

    public function limit(int $size = 25, int $number = 1)
    {
        return $this;
    }
}
