<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Tag.
 *
 * @property int $id
 * @property string $label
 */
class Tag extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = ['label'];

    /** @var bool */
    public $timestamps = false;

    /**
     * @return BelongsToMany
     */
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
