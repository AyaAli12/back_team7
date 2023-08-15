<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory , GeneratesUuid;
    protected $fillable=[
        'name',
        'logo',
        'uuid'
    ];
    public function collages() :HasMany
    {
        return $this->hasMany(Collage::class);
    }
}
