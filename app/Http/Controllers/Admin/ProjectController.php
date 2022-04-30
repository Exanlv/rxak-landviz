<?php

namespace Rxak\App\Http\Controllers\Admin;

use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Models\Category;
use Rxak\App\Models\Project;
use Rxak\App\Templating\Pages\Admin\Project\Create;
use Rxak\App\Templating\Pages\Admin\Project\Edit;
use Rxak\App\Templating\Pages\Admin\Project\Index;
use Rxak\App\Templating\Pages\Admin\Project\Show;
use Rxak\Framework\Filesystem\Filesystem;
use Rxak\Framework\Http\Request;
use Rxak\Framework\Http\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProjectController extends BaseController
{
    public function index(Request $request)
    {
        $projects = Project::all()->all();

        return new Response(
            new Index($projects),
            200
        );
    }

    public function show(Request $request, Project $project)
    {
        return new Response(
            new Show($project),
            200
        );
    }

    public function create(Request $request)
    {
        $categories = Category::all()->all();
        return new Response(
            new Create($categories),
            200
        );
    }

    public function store(Request $request)
    {
        $project = new Project();

        $project->name = $request->get('name');
        $project->description = $request->get('description');
        $project->category_id = (int) $request->get('category');

        /**
         * @var ?\Symfony\Component\HttpFoundation\File\UploadedFile
         */
        $file = $request->files->get('thumbnail');
        if ($file === null) {
            $project->image = 'https://placeholder.pics/svg/512';
        } else {
            $path = 'uploads/project-images';
            $fileExtension = $file->getClientOriginalExtension();
            $fullDir = Filesystem::getInstance()->baseDir . '/public/' . $path;

            do {
                $fileName = bin2hex(random_bytes(10)) . '.' . $fileExtension;
            } while (file_exists($fullDir . '/' . $fileName));

            $file->move($fullDir, $fileName);

            $project->image = pub($path . '/' . $fileName);
        }

        $project->highlighted = $request->get('highlighted', 'off') === 'on';

        $project->languages = array_map(function ($item) {
            return trim($item);
        }, explode(',', $request->get('languages', '')));

        $project->save();

        return new RedirectResponse('/admin/project');
    }

    public function edit(Request $request, Project $project)
    {
        $categories = Category::all()->all();
        return new Response(
            new Edit($project, $categories),
            200
        );
    }

    public function update(Request $request, Project $project)
    {
        $project->name = $request->get('name');
        $project->description = $request->get('description');
        $project->category_id = (int) $request->get('category');

        /**
         * @var ?\Symfony\Component\HttpFoundation\File\UploadedFile
         */
        $file = $request->files->get('thumbnail');
        if ($file !== null) {
            $path = 'uploads/project-images';
            $fileExtension = $file->getClientOriginalExtension();
            $fullDir = Filesystem::getInstance()->baseDir . '/public/' . $path;

            do {
                $fileName = bin2hex(random_bytes(10)) . '.' . $fileExtension;
            } while (file_exists($fullDir . '/' . $fileName));

            $file->move($fullDir, $fileName);

            $project->image = pub($path . '/' . $fileName);
        }

        $project->highlighted = $request->get('highlighted', 'off') === 'on';

        $project->languages = array_map(function ($item) {
            return trim($item);
        }, explode(',', $request->get('languages', '')));

        $project->save();

        return new RedirectResponse('/admin/project');
    }

    public function destroy(Request $request, Project $project)
    {
        $project->delete();

        return new RedirectResponse('/admin/project');
    }
}