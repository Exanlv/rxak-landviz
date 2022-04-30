<?php

namespace Rxak\App\Models;

use \Rxak\Framework\Models\GetFromRoute;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string[] $languages
 * @property bool $highlighted
 * @property ?Category $category
 */
class Project extends Model
{
    use GetFromRoute;

    protected $casts = [
        'languages' => 'array',
        'highlighted' => 'bool',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}