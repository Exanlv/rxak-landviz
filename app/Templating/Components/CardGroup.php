<?php

namespace Rxak\App\Templating\Components;

use Rxak\Framework\Templating\Component;

class CardGroup extends Component
{
    /**
     * @var string[] $cards
     */
    public function __construct(
        public array $cards
    ) {
        
    }

    public static function getFile(): string
    {
        return 'components/card-group';
    }
}