<?php

namespace Rxak\App\Templating\Components;

use Rxak\App\Helpers\Authorization;
use Rxak\App\Models\User;
use Rxak\Framework\Templating\Component;

class LoggedInMenu extends Component
{
    public ?User $user;
    public bool $loggedIn;

    public function __construct(
    ) {
        if ($this->loggedIn = Authorization::isAuthorized()) {
            $this->user = Authorization::get();
        }
    }

    public static function getFile(): string
    {
        return 'components/logged-in-menu';
    }
}