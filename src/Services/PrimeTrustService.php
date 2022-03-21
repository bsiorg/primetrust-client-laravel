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
}
