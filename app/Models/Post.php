<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Post
 * @package App\Models
 *
 * @property string $name
 * @property string $avatar
 * @property string $desc
 * @property int $status
 * @property HasMany $comments
 */
class Post extends Model
{
    use HasFactory;

    /**
     * @var $fillable
     */
    protected $fillable = [
        'name',
        'avatar',
        'desc',
        'status',
    ];

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
