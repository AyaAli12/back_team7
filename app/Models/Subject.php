<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'uid'
    ];

    public function collage() :BelongsTo
    {
        return $this->belongsTo(Collage::class);
    }

    public function questions() :HasMany
    {
        return $this->hasMany(Question::class);
    }


}
