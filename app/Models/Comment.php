<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Comment
 * @package App\Models
 * @property string $name
 * @property int $post_id
 * @property string $message
 * @property int $author_id
 * @property BelongsTo $post
 * @property BelongsTo $user
 */
class Comment extends Model
{
    use HasFactory;

    /**
     * @var $fillable
     */
    protected $fillable = [
        'name',
        'post_id',
        'message',
        'author_id',
    ];

    /**
     * @return BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
