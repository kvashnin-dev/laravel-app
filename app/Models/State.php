<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class State.
 *
 * @property int $id
 * @property int $likes
 * @property int $views
 * @property int $article_id
 */
class State extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = ['likes', 'views', 'article_id'];

    /**
     * @var bool
     */
    public $timestamps = false;
}
