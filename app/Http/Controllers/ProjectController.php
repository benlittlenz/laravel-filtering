<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return Projects::filter($request, $this->getFilters())->get();
    }

    protected function getFilters()
    {
        return [
            //
        ];
    }
}
