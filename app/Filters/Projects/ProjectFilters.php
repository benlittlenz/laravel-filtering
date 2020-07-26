<?php

namespace App\Filters\Projects;

use Illuminate\Http\Request;
use App\Filters\FiltersAbstract;
use App\Filters\Projects\ActiveFilter;
use App\Filters\Projects\StatusFilter;
use Illuminate\Database\Eloquent\Builder;

class ProjectFilters extends FiltersAbstract
{
    protected $filters = [
        'status' => StatusFilter::class,
        'active' => ActiveFilter::class
    ]; 
}