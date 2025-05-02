<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chunk extends Model
{
    protected $fillable = ['document_id', 'content'];

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }
}
