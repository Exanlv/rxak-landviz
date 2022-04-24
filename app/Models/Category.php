<?php

namespace Rxak\App\Models;

use \Rxak\Framework\Models\GetFromRoute;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $weight
 * @property Project[] $projects
 */
class Category extends Model
{
    use GetFromRoute;

    public function projects()
    {
        return $this->hasMany(Project::class, 'category_id', 'id');
    }
}