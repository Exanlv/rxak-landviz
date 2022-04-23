<?php

namespace Rxak\App\Templating\Pages\Admin;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class ProjectsPage extends Page
{
    /**
     * @var \Rxak\App\Models\Project[] $projects
     */
    public function __construct(
        public array $projects
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/projects';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}