<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'uuid'
    ];

    public function questions():BelongsToMany{
        return $this->belongsToMany(Question::class,'question_choices','choice_id');
    }
}
