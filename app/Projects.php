<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Projects\ProjectFilters;
use Illuminate\Database\Eloquent\Builder;

class Projects extends Model
{
    
    public function scopeFilter(Builder $builder, $request)
    {
        //Takes request, takes in request  and applies the builder to the filter
        return (new ProjectFilters($request))->filter($builder);
    }
}
