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
        public array $languages,
        public ?string $url = null
    ) {
        
    }

    public static function getFile(): string
    {
        return 'components/card';
    }
}