<?php

namespace BsiOrg\PrimeTrust\Services;

use BsiOrg\PrimeTrust\PrimeTrust;

trait PrimeTrustService
{
    public $asc;

    protected $resource;
    protected $resourceId;
    protected $includes;
    protected $pageSize;
    protected $pageNumber;
    protected $sorts;

    public function all(): array
    {
        $params = [
            'page[size]'   => $this->pageSize,
            'page[number]' => $this->pageNumber
        ];

        if ($this->sorts) {
            $params = array_merge($params, [
                'sort' => implode(',', $this->sorts)
            ]);
        }

        return $this->request(
            'GET',
            sprintf(
                '%s/%s/%s?%s',
                $this->url,
                $this->prefix,
                $this->resource,
                http_build_query($params)
            )
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

    public function include(string $include): PrimeTrust
    {
        $this->includes = $include;

        return $this;
    }

    public function limit(int $pageSize = 25, int $pageNumber = 1): PrimeTrust
    {
        $this->pageSize = $pageSize;
        $this->pageNumber = $pageNumber;

        return $this;
    }

    public function orderBy(string $sort): PrimeTrust
    {
        $this->sorts[] = $sort;

        return $this;
    }

    public function orderByAsc(string $sort): PrimeTrust
    {
        $this->orderBy($sort);

        return $this;
    }

    public function orderByDesc(string $sort): PrimeTrust
    {
        $this->orderBy(sprintf('-%s', $sort));

        return $this;
    }

    public function where(string $key, string $operator, string $value)
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
