<?php

namespace Rxak\App\Models;

use \Rxak\Framework\Models\GetFromRoute;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */
class User extends Model implements Authenticatable
{
    use GetFromRoute;

    public function getId(): int|string
    {
        return $this->id;
    }

    public static function getById(int|string $id)
    {
        return static::find($id);
    }

    public static function getByEmail(string $email)
    {
        return User::where('email', $email)->get()->first();
    }
}