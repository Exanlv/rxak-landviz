<?php

namespace Rxak\App\Templating\Pages\Admin\Project;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Index extends Page
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
        return 'views/admin/project/index';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}