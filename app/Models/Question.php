<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Mockery\Matcher\Subset;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'content',
        'reference',
        'uid'
    ];

    public function users() :BelongsToMany
    {
        return $this->belongsToMany(User::class,'importants','question_id');
    }
    public function choices() :BelongsToMany
    {
        return $this->belongsToMany(Choice::class,'question_choices','question_id');
    }
    public function terms() :BelongsToMany
    {
        return $this->belongsToMany(Term::class,'term_questions','question_id');
    }
public function subject() :BelongsTo
{
    return $this->belongsTo(Subject::class);
}

}
