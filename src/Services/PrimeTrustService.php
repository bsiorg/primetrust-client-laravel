<?php

namespace BsiOrg\PrimeTrust\Services;

use BsiOrg\PrimeTrust\PrimeTrust;

trait PrimeTrustService
{
    protected $resource;
    protected $resourceId;

    public function all(): array
    {
        return $this->request(
            'GET',
            sprintf("%s/%s/%s", $this->url, $this->prefix, $this->resource)
        );
    }

    public function get()
    {
        return $this->request(
            'GET',
            sprintf(
                "%s/%s/%s/%s",
                $this->url,
                $this->prefix,
                $this->resource,
                $this->resourceId
            )
        );
    }

    public function find(string $resourceId)
    {
        $this->resourceId = $resourceId;

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

    public function orderByAsc(array $sort)
    {
        return $this;
    }

    public function orderByDesc(array $sort)
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

    public function resource($resource): PrimeTrust
    {
        $this->resource = $resource;

        return $this;
    }

    public function accounts(): PrimeTrust
    {
        $this->resource = 'accounts';

        return $this;
    }

    public function contacts(): PrimeTrust
    {
        $this->resource = 'contacts';

        return $this;
    }
}
