<?php

namespace Rxak\App\Models;

interface Authenticatable
{
    public function getId(): int|string;
    public static function getById(int|string $id);
}