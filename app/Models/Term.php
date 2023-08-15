<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Term extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
    ]; 

    public function collage() : BelongsTo{
        return $this->belongsTo(Collage::class);
    }

    public function questions() :BelongsToMany
    {
        return $this->belongsToMany(Question::class,'term_questions','term_id');
    }
}
