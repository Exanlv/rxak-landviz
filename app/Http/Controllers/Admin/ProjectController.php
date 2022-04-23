<?php

namespace Rxak\App\Http\Controllers\Admin;

use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Models\Project;
use Rxak\App\Templating\Pages\Admin\CreateProjectPage;
use Rxak\App\Templating\Pages\Admin\ProjectsPage;
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

    public function store(Request $request)
    {
        $project = new Project();

        $project->name = $request->get('name');
        $project->description = $request->get('description');

        /**
         * @var ?\Symfony\Component\HttpFoundation\File\UploadedFile
         */
        $file = $request->files->get('thumbnail');
        if ($file !== null) {
            $path = '/uploads/project-images';
            $fileExtension = $file->getClientOriginalExtension();
            $fullDir = Filesystem::getInstance()->baseDir . '/public' . $path;

            do {
                $fileName = bin2hex(random_bytes(10)) . '.' . $fileExtension;
            } while (file_exists($fullDir . '/' . $fileName));

            $file->move($fullDir, $fileName);

            $project->image = $path . '/' . $fileName;
        } else {
            $project->image = 'https://placeholder.pics/svg/512';
        }

        $project->highlighted = $request->get('highlighted', 'off') === 'on';

        $project->languages = array_map(function ($item) {
            return trim($item);
        }, explode(',', $request->get('languages', '')));

        $project->save();

        return new RedirectResponse('/admin/project');
    }
}