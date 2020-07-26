<?php

namespace App\Filters\Projects;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class ActiveFilter extends FilterAbstract
{
    public function filter(Builder $builder, $value)
    {
        return $builder;
    }
}