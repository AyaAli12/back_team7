<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Code extends Model
{
    use HasFactory;

protected $fillable=[
    'uuid',
    'code'
];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function collage() :BelongsTo
    {
        return $this->belongsTo(Collage::class);
    }
}
