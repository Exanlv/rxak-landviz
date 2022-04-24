<?php

namespace Rxak\App\Templating\Components;

use Rxak\App\Models\Category as ModelsCategory;
use Rxak\Framework\Templating\Component;

class Category extends Component
{
    /**
     * @var \Rxak\App\Templating\Components\Card[]
     */
    public array $cards = [];

    public function __construct(
        public ModelsCategory $category
    ) {
        /**
         * @var \Rxak\App\Models\Project $project
         */
        foreach ($category->projects as $project) {
            $this->cards[] = new Card($project->name, $project->image, $project->description, $project->languages);
        }
    }

    public static function getFile(): string
    {
        return 'components/category';
    }
}