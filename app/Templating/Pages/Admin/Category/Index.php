<?php

namespace Rxak\App\Templating\Pages\Admin\Category;

use Rxak\App\Templating\Pages\BasePage;
use Rxak\Framework\Templating\Page;

class Index extends Page
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
        return 'views/admin/category/index';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}