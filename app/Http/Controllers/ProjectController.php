<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return Projects::get();
    }
}
