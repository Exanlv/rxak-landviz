<?php

namespace Rxak\App\Templating\Pages\Admin\Category;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Create extends Page
{
    public function __construct(
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/category/create';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}