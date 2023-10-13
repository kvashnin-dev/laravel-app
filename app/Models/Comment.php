<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Comment.
 *
 * @property int $id
 * @property string $subject
 * @property string $body
 * @property int $article_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Comment extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = ['subject', 'body', 'article_id'];

    /**
     * @return BelongsTo
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
