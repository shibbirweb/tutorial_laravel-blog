<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    protected $casts = [
        'published_at' => 'immutable_datetime',
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

    /* === Local scope start === */

    /**
     * Fetch current user's posts
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfCurrentUser(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id());
    }

    /* === Local scope end === */

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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
