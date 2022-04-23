<?php

namespace Rxak\App\Templating\Pages;

class LoginPage extends BasePage
{
    public function __construct(
    ) {
        
    }

    public static function getFile(): string
    {
        return 'views/login';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}