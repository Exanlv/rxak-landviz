<?php

namespace Rxak\App\Templating\Pages\Admin\Project;

use Rxak\App\Models\Project;
use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Edit extends Page
{
    /**
     * @var \Rxak\App\Models\Category[]
     */
    public function __construct(
        public Project $project,
        public array $categories
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/project/edit';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}