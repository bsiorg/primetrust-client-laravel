<?php

namespace BsiOrg\PrimeTrust\Actions;

use BsiOrg\PrimeTrust\PrimeTrust;

trait PrimeTrustFilterAction
{
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
