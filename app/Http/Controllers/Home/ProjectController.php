<?php

namespace Rxak\App\Http\Controllers\Home;

use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Http\Response;
use Rxak\App\Models\Category;
use Rxak\App\Templating\Pages\ProjectsPage;
use Rxak\Framework\Http\Request;

class ProjectController extends BaseController
{
    public function index(Request $request)
    {
        return new Response(
            new ProjectsPage(
                Category::orderBy('weight', 'asc')->get()->all()
            ),
            200
        );
    }
}