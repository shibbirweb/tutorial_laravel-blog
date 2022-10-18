<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'published_at',
    ];

    /* === Relationship start === */

    /**
     * Get associated author of post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /* === Relationship end === */

    /* === Custom helper methods start === */

    /**
     * Check post is published or not
     *
     * @return boolean
     */
    public function isPublished(): bool
    {
        return $this->published_at != null;
    }

    /* === Custom helper methods end === */
}
