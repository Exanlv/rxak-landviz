<?php

namespace Rxak\App\Templating\Pages\Admin\Project;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Create extends Page
{
    /**
     * @var \Rxak\App\Models\Category[]
     */
    public function __construct(
        public array $categories 
    ) {
    }

    public static function getFile(): string
    {
        return 'views/admin/project/create';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}