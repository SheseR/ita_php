<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class PostTag extends Model
{
    use HasFactory;

    protected $table = 'post_tag';
    protected $fillable = [
        'post_id',
        'tag_id'
    ];
}