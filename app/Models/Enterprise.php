<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Enterprise extends Model
{
    use HasFactory;
    protected $table = 'enterprises';

    protected $fillable = [
        'fantasy_name',
        'cnpj',
        'email',
        'phone',
        'status',
        'user_id',
        'address',
        'city',
        'number',
        'complement',
    ];
}
