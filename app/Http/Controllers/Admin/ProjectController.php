<?php

namespace Rxak\App\Http\Controllers\Admin;

use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Models\Project;
use Rxak\App\Templating\Pages\Admin\CreateProjectPage;
use Rxak\App\Templating\Pages\Admin\ProjectsPage;
use Rxak\Framework\Http\Request;
use Rxak\Framework\Http\Response;

class ProjectController extends BaseController
{
    public function index(Request $request)
    {
        $projects = Project::all()->all();

        return new Response(
            new ProjectsPage($projects),
            200
        );
    }

    public function create(Request $request)
    {
        return new Response(
            new CreateProjectPage(),
            200
        );
    }
}