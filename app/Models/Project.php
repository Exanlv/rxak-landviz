<?php

namespace Rxak\App\Models;

use \Rxak\Framework\Models\GetFromRoute;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string[] $languages
 * @property bool $highlighted
 * @property int $category_id
 * @property ?Category $category
 */
class Project extends Model
{
    use GetFromRoute;
    use SoftDeletes;

    protected $casts = [
        'languages' => 'array',
        'highlighted' => 'bool',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}