<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProjectsResource;

class ProjectsController extends Controller
{
    public function index()
    {
        return makeResponse(
            ProjectsResource::collection(
                auth()->user()->projects()->with('group:id,title')->get()
            )
        );
    }
}
