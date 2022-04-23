<?php

namespace Rxak\App\Templating\Pages;

use Rxak\App\Templating\Components\Card;
use Rxak\Framework\Templating\Page;

class HomePage extends Page
{
    /**
     * @var \Rxak\App\Templating\Components\Card[]
     */
    public array $cards = [];

    /**
     * @var \Rxak\App\Models\Project[] $highlightedProjects
     */
    public function __construct(
        array $highlightedProjects
    ) {
        /**
         * @var \Rxak\App\Models\Project $project
         */
        foreach ($highlightedProjects as $project) {
            $this->cards[] = new Card(
                $project['name'],
                $project['image'],
                $project['description'],
                $project['languages']
            );
        }
    }

    public static function getFile(): string
    {
        return 'views/home';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}