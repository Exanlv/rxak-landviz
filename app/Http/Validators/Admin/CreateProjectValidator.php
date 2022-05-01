<?php

namespace Rxak\App\Http\Validators\Admin;

use Rxak\App\Models\Category;

class CreateProjectValidator extends ProjectValidator
{
    public function validate(): void
    {
        $this->minLength('name', 1);
        $this->maxLength('name', 255);

        $this->minLength('description', 1);
        $this->maxLength('description', 1024);

        $this->minLength('languages', 1);
        $this->maxLength('languages', 255);

        $this->inArray('category', array_map(function ($category) {
            return $category->id;
        }, Category::all(['id'])->all()), 255);
    }
}