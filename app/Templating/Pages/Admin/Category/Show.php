<?php

namespace Rxak\App\Templating\Pages\Admin\Category;

use Rxak\App\Models\Category;
use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Show extends Page
{
    public function __construct(
        public Category $category
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/category/show';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}