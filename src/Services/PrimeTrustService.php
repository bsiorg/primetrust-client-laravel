<?php

namespace BsiOrg\PrimeTrust\Services;

use BsiOrg\PrimeTrust\Actions\PrimeTrustFilterAction;
use BsiOrg\PrimeTrust\PrimeTrust;
use BsiOrg\PrimeTrust\Resources\PrimeTrustResource;

trait PrimeTrustService
{
    use HttpClientService;
    use PrimeTrustResource;
    use PrimeTrustFilterAction;

    protected $resource;
    protected $resourceId;

    protected $params = [];
    protected $withs;
    protected $pageSize;
    protected $pageNumber;
    protected $sorts;
    protected $filters = [];

    public function all(): array
    {
        if ($this->withs) {
            $this->params = array_merge($this->params, [
                'include' => implode(',', $this->withs),
            ]);
        }

        if ($this->pageSize) {
            $this->params = array_merge($this->params, [
                'page[size]' => $this->pageSize,
            ]);
        }

        if ($this->pageNumber) {
            $this->params = array_merge($this->params, [
                'page[number]' => $this->pageNumber,
            ]);
        }

        if ($this->sorts) {
            $this->params = array_merge($this->params, [
                'sort' => implode(',', $this->sorts),
            ]);
        }

        if ($this->filters) {
            foreach ($this->filters as $filter) {
                $this->params = array_merge($this->params, [
                    "filter[{$filter['key']} {$filter['operator']}]" => $filter['value'],
                ]);
            }
        }

        return $this->request(
            'GET',
            sprintf(
                '%s/%s/%s?%s',
                $this->url,
                $this->prefix,
                $this->resource,
                http_build_query($this->params)
            )
        );
    }

    public function get()
    {
        return $this->request(
            'GET',
            sprintf(
                '%s/%s/%s/%s',
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

    public function with(string $resource): PrimeTrust
    {
        $this->withs[] = $resource;

        return $this;
    }

    public function limit(int $pageSize = 25, int $pageNumber = 1): PrimeTrust
    {
        $this->pageSize = $pageSize;
        $this->pageNumber = $pageNumber;

        return $this;
    }

    public function orderBy(string $column, string $order): PrimeTrust
    {
        if ($order == 'desc') {
            $this->sorts[] = sprintf('-%s', $column);
        } else {
            $this->sorts[] = $column;
        }

        return $this;
    }

    public function orderByAsc(string $column): PrimeTrust
    {
        $this->orderBy($column, 'asc');

        return $this;
    }

    public function orderByDesc(string $column): PrimeTrust
    {
        $this->orderBy($column, 'desc');

        return $this;
    }

    public function latest(): PrimeTrust
    {
        $this->orderByDesc('created_at');

        return $this;
    }

    public function oldest(): PrimeTrust
    {
        $this->orderByDesc('created_at');

        return $this;
    }

    public function where(
        string $key,
        string $operator,
        string $value
    ): PrimeTrust {
        $this->filters[] = [
            'key'      => $key,
            'operator' => $operator,
            'value'    => $value,
        ];

        return $this;
    }
}
