<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mockery\Matcher\Subset;

class Collage extends Model
{
    use HasFactory, GeneratesUuid;

protected $fillable=[
    'name',
    'logo',
    'uuid'
];

public function users() :HasMany
{
    return $this->hasMany(User::class);
}

public function subjects() :HasMany
{
    return $this->hasMany(Subject::class);
}

public function terms() :HasMany
{
    return $this->hasMany(Subject::class);
}

public function codes() :HasMany
{
    return $this->hasMany(Code::class);
}

public function category() :BelongsTo
{
    return $this->belongsTo(Category::class);
}
}
