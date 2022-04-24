<?php

namespace Rxak\App\Templating\Pages;

use Rxak\Framework\Templating\Page;

class ProjectsPage extends Page
{
    /**
     * @var \Rxak\App\Models\Category[] $categories
     */
    public function __construct(
        public array $categories
    ) {
    }

    public static function getFile(): string
    {
        return 'views/projects';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}