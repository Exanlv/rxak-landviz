<?php

namespace Rxak\App\Templating\Pages\Admin;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class CreateProjectPage extends Page
{
    public function __construct(
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/create-project';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}