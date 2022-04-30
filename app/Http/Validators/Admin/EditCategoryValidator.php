<?php

namespace Rxak\App\Http\Validators\Admin;

class EditCategoryValidator extends CategoryValidator
{
    public function validate(): void
    {
        $this->minLength('name', 1);
        $this->maxLength('name', 255);

        $this->min('weight', 0);
        $this->max('weight', 9999);
    }
}