<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Article.
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string $img
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Article extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = ['title', 'body', 'img', 'slug'];

    /**
     * @return HasOne
     */
    public function comments(): HasOne
    {
        return $this->hasOne(Comment::class);
    }

    /**
     * @return HasOne
     */
    public function state(): HasOne
    {
        return $this->hasOne(State::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
