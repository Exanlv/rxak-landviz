<?php

namespace Rxak\App\Templating\Pages;

use Rxak\App\Helpers\Authorization;
use Rxak\Framework\Templating\Page;

class BasePage extends Page
{
    public bool $loggedIn;

    public function __construct(
        public string $body = ''
    ) {
        $this->loggedIn = Authorization::isAuthorized();
    }

    public static function getFile(): string
    {
        return 'views/base';
    }
}