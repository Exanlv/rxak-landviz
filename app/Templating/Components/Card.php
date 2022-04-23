<?php

namespace Rxak\App\Templating\Components;

use Rxak\Framework\Templating\Component;

class Card extends Component
{
    /**
     * @var string[] $languages
     */
    public function __construct(
        public string $name,
        public string $image,
        public string $description,
        public array $languages
    ) {
        
    }

    public static function getFile(): string
    {
        return 'components/card';
    }
}