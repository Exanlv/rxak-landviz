<?php

namespace Rxak\App\Templating\Pages\Admin\Project;

use Rxak\App\Models\Project;
use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Show extends Page
{
    public function __construct(
        public Project $project
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/project/show';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}