<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class FiltersAbstract
{
    protected $request;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filter(Builder $builder)
    {
        //Looping through all filters defined in ProjectFilters,
        //Then grabbing name of one of the filters i.e. (status)
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->filter($builder, $value);

        }

        return $builder;
    }

    public function add(array $filters)
    {
        $this->filters = array_merge($this->filters, $filters);

        return $this;
    }

    //Filter the filters as defined in ProjectFilters
    public function getFilters()
    {
        return $this->filterFilters($this->filters);
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }

    //Filter filters if there are filters in the query string
    protected function filterFilters($filters)
    {
        //only grab from filter request when array keys are present
        return array_filter($this->request->only(array_keys($this->filters)));
    }
}