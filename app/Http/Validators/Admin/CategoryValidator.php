<?php

namespace Rxak\App\Http\Validators\Admin;

use Rxak\App\Helpers\Authorization;
use Rxak\Framework\Validation\Validator;

class CategoryValidator extends Validator
{
    public function authorized(): bool
    {
        return Authorization::isAuthorized();
    }

    public function validate(): void
    {
        
    }
}