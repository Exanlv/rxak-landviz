<?php

namespace Rxak\App\Templating\Pages\Admin;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class CreateCategoryPage extends Page
{
    public function __construct(
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/create-category';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}