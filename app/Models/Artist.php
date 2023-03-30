<?php

namespace App\Models;

use App\Models\Release;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'genre'
    ];

    public function releases(): HasMany
    {
        return $this->hasMany(Release::class);
    }
}
