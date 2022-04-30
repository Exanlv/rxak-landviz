<?php

namespace Rxak\App\Http\Controllers\Admin;

use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Models\Category;
use Rxak\App\Templating\Pages\Admin\Category\Create;
use Rxak\App\Templating\Pages\Admin\Category\Edit;
use Rxak\App\Templating\Pages\Admin\Category\Index;
use Rxak\App\Templating\Pages\Admin\Category\Show;
use Rxak\Framework\Http\Request;
use Rxak\Framework\Http\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryController extends BaseController
{
    public function index(Request $request)
    {
        $projects = Category::all()->all();

        return new Response(
            new Index($projects),
            200
        );
    }

    public function show(Request $requests, Category $category)
    {
        return new Response(
            new Show($category),
            200
        );
    }

    public function create(Request $request)
    {
        return new Response(
            new Create(),
            200
        );
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->get('name');
        $category->weight = (int) $request->get('weight');

        $category->save();

        return new RedirectResponse('/admin/category');
    }

    public function edit(Request $request, Category $category)
    {
        return new Response(
            new Edit($category),
            200
        );
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->get('name');
        $category->weight = (int) $request->get('weight');

        $category->save();

        return new RedirectResponse('/admin/category');
    }

    public function destroy(Request $request, Category $category)
    {
        $category->delete();

        return new RedirectResponse('/admin/category');
    }
}